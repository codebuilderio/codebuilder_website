<?php
/**
 * PrivateBin
 *
 * a zero-knowledge paste bin
 *
 * @link      https://github.com/PrivateBin/PrivateBin
 * @copyright 2012 Sébastien SAUVAGE (sebsauvage.net)
 * @license   https://www.opensource.org/licenses/zlib-license.php The zlib/libpng License
 * @version   1.1
 */

namespace PrivateBin;

use Exception;
use PrivateBin\Persistence\ServerSalt;
use PrivateBin\Persistence\TrafficLimiter;

/**
 * PrivateBin
 *
 * Controller, puts it all together.
 */
class PrivateBin
{
    /**
     * version
     *
     * @const string
     */
    const VERSION = '1.1';

    /**
     * show the same error message if the paste expired or does not exist
     *
     * @const string
     */
    const GENERIC_ERROR = 'Paste does not exist, has expired or has been deleted.';

    /**
     * configuration
     *
     * @access private
     * @var    Configuration
     */
    private $_conf;

    /**
     * data
     *
     * @access private
     * @var    string
     */
    private $_data = '';

    /**
     * does the paste expire
     *
     * @access private
     * @var    bool
     */
    private $_doesExpire = false;

    /**
     * error message
     *
     * @access private
     * @var    string
     */
    private $_error = '';

    /**
     * status message
     *
     * @access private
     * @var    string
     */
    private $_status = '';

    /**
     * JSON message
     *
     * @access private
     * @var    string
     */
    private $_json = '';

    /**
     * Factory of instance models
     *
     * @access private
     * @var    model
     */
    private $_model;

    /**
     * request
     *
     * @access private
     * @var    request
     */
    private $_request;

    /**
     * URL base
     *
     * @access private
     * @var    string
     */
    private $_urlBase;

    /**
     * constructor
     *
     * initializes and runs PrivateBin
     *
     * @access public
     * @throws Exception
     * @return void
     */
    public function __construct()
    {
        if (version_compare(PHP_VERSION, '5.3.0') < 0) {
            throw new Exception(I18n::_('PrivateBin requires php 5.3.0 or above to work. Sorry.'), 1);
        }
        if (strlen(PATH) < 0 && substr(PATH, -1) !== DIRECTORY_SEPARATOR) {
            throw new Exception(I18n::_('PrivateBin requires the PATH to end in a "%s". Please update the PATH in your index.php.', DIRECTORY_SEPARATOR), 5);
        }

        // load config from ini file, initialize required classes
        $this->_init();

        switch ($this->_request->getOperation()) {
            case 'create':
                $this->_create();
                break;
            case 'delete':
                $this->_delete(
                    $this->_request->getParam('pasteid'),
                    $this->_request->getParam('deletetoken')
                );
                break;
            case 'read':
                $this->_read($this->_request->getParam('pasteid'));
                break;
            case 'jsonld':
                $this->_jsonld($this->_request->getParam('jsonld'));
                return;
        }

        // output JSON or HTML
        if ($this->_request->isJsonApiCall()) {
            header('Content-type: ' . Request::MIME_JSON);
            header('Access-Control-Allow-Origin: *');
            header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
            header('Access-Control-Allow-Headers: X-Requested-With, Content-Type');
            echo $this->_json;
        } else {
            $this->_view();
        }
    }

    /**
     * initialize privatebin
     *
     * @access private
     * @return void
     */
    private function _init()
    {
        foreach (array('cfg', 'lib') as $dir) {
            if (!is_file(PATH . $dir . DIRECTORY_SEPARATOR . '.htaccess')) {
                file_put_contents(
                PATH . $dir . DIRECTORY_SEPARATOR . '.htaccess',
                'Allow from none' . PHP_EOL .
                'Deny from all' . PHP_EOL,
                LOCK_EX
            );
            }
        }

        $this->_conf    = new Configuration;
        $this->_model   = new Model($this->_conf);
        $this->_request = new Request;
        $this->_urlBase = array_key_exists('REQUEST_URI', $_SERVER) ?
            htmlspecialchars($_SERVER['REQUEST_URI']) : '/';
        ServerSalt::setPath($this->_conf->getKey('dir', 'traffic'));

        // set default language
        $lang = $this->_conf->getKey('languagedefault');
        I18n::setLanguageFallback($lang);
        // force default language, if language selection is disabled and a default is set
        if (!$this->_conf->getKey('languageselection') && strlen($lang) == 2) {
            $_COOKIE['lang'] = $lang;
            setcookie('lang', $lang);
        }
    }

    /**
     * Store new paste or comment
     *
     * POST contains one or both:
     * data = json encoded SJCL encrypted text (containing keys: iv,v,iter,ks,ts,mode,adata,cipher,salt,ct)
     * attachment = json encoded SJCL encrypted text (containing keys: iv,v,iter,ks,ts,mode,adata,cipher,salt,ct)
     *
     * All optional data will go to meta information:
     * expire (optional) = expiration delay (never,5min,10min,1hour,1day,1week,1month,1year,burn) (default:never)
     * formatter (optional) = format to display the paste as (plaintext,syntaxhighlighting,markdown) (default:syntaxhighlighting)
     * burnafterreading (optional) = if this paste may only viewed once ? (0/1) (default:0)
     * opendiscusssion (optional) = is the discussion allowed on this paste ? (0/1) (default:0)
     * attachmentname = json encoded SJCL encrypted text (containing keys: iv,v,iter,ks,ts,mode,adata,cipher,salt,ct)
     * nickname (optional) = in discussion, encoded SJCL encrypted text nickname of author of comment (containing keys: iv,v,iter,ks,ts,mode,adata,cipher,salt,ct)
     * parentid (optional) = in discussion, which comment this comment replies to.
     * pasteid (optional) = in discussion, which paste this comment belongs to.
     *
     * @access private
     * @return string
     */
    private function _create()
    {
        // Ensure last paste from visitors IP address was more than configured amount of seconds ago.
        TrafficLimiter::setConfiguration($this->_conf);
        if (!TrafficLimiter::canPass()) {
            return $this->_return_message(
            1, I18n::_(
                'Please wait %d seconds between each post.',
                $this->_conf->getKey('limit', 'traffic')
            )
        );
        }

        $data           = $this->_request->getParam('data');
        $attachment     = $this->_request->getParam('attachment');
        $attachmentname = $this->_request->getParam('attachmentname');

        // Ensure content is not too big.
        $sizelimit = $this->_conf->getKey('sizelimit');
        if (
            strlen($data) + strlen($attachment) + strlen($attachmentname) > $sizelimit
        ) {
            return $this->_return_message(
            1,
            I18n::_(
                'Paste is limited to %s of encrypted data.',
                Filter::formatHumanReadableSize($sizelimit)
            )
        );
        }

        // Ensure attachment did not get lost due to webserver limits or Suhosin
        if (strlen($attachmentname) > 0 && strlen($attachment) == 0) {
            return $this->_return_message(1, 'Attachment missing in data received by server. Please check your webserver or suhosin configuration for maximum POST parameter limitations.');
        }

        // The user posts a comment.
        $pasteid  = $this->_request->getParam('pasteid');
        $parentid = $this->_request->getParam('parentid');
        if (!empty($pasteid) && !empty($parentid)) {
            $paste = $this->_model->getPaste($pasteid);
            if ($paste->exists()) {
                try {
                    $comment = $paste->getComment($parentid);

                    $nickname = $this->_request->getParam('nickname');
                    if (!empty($nickname)) {
                        $comment->setNickname($nickname);
                    }

                    $comment->setData($data);
                    $comment->store();
                } catch (Exception $e) {
                    return $this->_return_message(1, $e->getMessage());
                }
                $this->_return_message(0, $comment->getId());
            } else {
                $this->_return_message(1, 'Invalid data.');
            }
        }
        // The user posts a standard paste.
        else {
            $this->_model->purge();
            $paste = $this->_model->getPaste();
            try {
                $paste->setData($data);

                if (!empty($attachment)) {
                    $paste->setAttachment($attachment);
                    if (!empty($attachmentname)) {
                        $paste->setAttachmentName($attachmentname);
                    }
                }

                $expire = $this->_request->getParam('expire');
                if (!empty($expire)) {
                    $paste->setExpiration($expire);
                }

                $burnafterreading = $this->_request->getParam('burnafterreading');
                if (!empty($burnafterreading)) {
                    $paste->setBurnafterreading($burnafterreading);
                }

                $opendiscussion = $this->_request->getParam('opendiscussion');
                if (!empty($opendiscussion)) {
                    $paste->setOpendiscussion($opendiscussion);
                }

                $formatter = $this->_request->getParam('formatter');
                if (!empty($formatter)) {
                    $paste->setFormatter($formatter);
                }

                $paste->store();
            } catch (Exception $e) {
                return $this->_return_message(1, $e->getMessage());
            }
            $this->_return_message(0, $paste->getId(), array('deletetoken' => $paste->getDeleteToken()));
        }
    }

    /**
     * Delete an existing paste
     *
     * @access private
     * @param  string $dataid
     * @param  string $deletetoken
     * @return void
     */
    private function _delete($dataid, $deletetoken)
    {
        try {
            $paste = $this->_model->getPaste($dataid);
            if ($paste->exists()) {
                // accessing this property ensures that the paste would be
                // deleted if it has already expired
                $burnafterreading = $paste->isBurnafterreading();
                if ($deletetoken == 'burnafterreading') {
                    if ($burnafterreading) {
                        $paste->delete();
                        $this->_return_message(0, $dataid);
                    } else {
                        $this->_return_message(1, 'Paste is not of burn-after-reading type.');
                    }
                } else {
                    // Make sure the token is valid.
                    if (Filter::slowEquals($deletetoken, $paste->getDeleteToken())) {
                        // Paste exists and deletion token is valid: Delete the paste.
                        $paste->delete();
                        $this->_status = 'Paste was properly deleted.';
                    } else {
                        $this->_error = 'Wrong deletion token. Paste was not deleted.';
                    }
                }
            } else {
                $this->_error = self::GENERIC_ERROR;
            }
        } catch (Exception $e) {
            $this->_error = $e->getMessage();
        }
    }

    /**
     * Read an existing paste or comment
     *
     * @access private
     * @param  string $dataid
     * @return void
     */
    private function _read($dataid)
    {
        try {
            $paste = $this->_model->getPaste($dataid);
            if ($paste->exists()) {
                $data              = $paste->get();
                $this->_doesExpire = property_exists($data, 'meta') && property_exists($data->meta, 'expire_date');
                if (property_exists($data->meta, 'salt')) {
                    unset($data->meta->salt);
                }
                $this->_data = json_encode($data);
            } else {
                $this->_error = self::GENERIC_ERROR;
            }
        } catch (Exception $e) {
            $this->_error = $e->getMessage();
        }

        if ($this->_request->isJsonApiCall()) {
            if (strlen($this->_error)) {
                $this->_return_message(1, $this->_error);
            } else {
                $this->_return_message(0, $dataid, json_decode($this->_data, true));
            }
        }
    }

    /**
     * Display PrivateBin frontend.
     *
     * @access private
     * @return void
     */
    private function _view()
    {
        // set headers to disable caching
        $time = gmdate('D, d M Y H:i:s \G\M\T');
        header('Cache-Control: no-store, no-cache, no-transform, must-revalidate');
        header('Pragma: no-cache');
        header('Expires: ' . $time);
        header('Last-Modified: ' . $time);
        header('Vary: Accept');
        header('Content-Security-Policy: ' . $this->_conf->getKey('cspheader'));
        header('X-Xss-Protection: 1; mode=block');
        header('X-Frame-Options: DENY');
        header('X-Content-Type-Options: nosniff');

        // label all the expiration options
        $expire = array();
        foreach ($this->_conf->getSection('expire_options') as $time => $seconds) {
            $expire[$time] = ($seconds == 0) ? I18n::_(ucfirst($time)) : Filter::formatHumanReadableTime($time);
        }

        // translate all the formatter options
        $formatters = array_map('PrivateBin\\I18n::_', $this->_conf->getSection('formatter_options'));

        // set language cookie if that functionality was enabled
        $languageselection = '';
        if ($this->_conf->getKey('languageselection')) {
            $languageselection = I18n::getLanguage();
            setcookie('lang', $languageselection);
        }

        $page = new View;
        $page->assign('CIPHERDATA', $this->_data);
        $page->assign('ERROR', I18n::_($this->_error));
        $page->assign('STATUS', I18n::_($this->_status));
        $page->assign('VERSION', self::VERSION);
        $page->assign('DISCUSSION', $this->_conf->getKey('discussion'));
        $page->assign('OPENDISCUSSION', $this->_conf->getKey('opendiscussion'));
        $page->assign('MARKDOWN', array_key_exists('markdown', $formatters));
        $page->assign('SYNTAXHIGHLIGHTING', array_key_exists('syntaxhighlighting', $formatters));
        $page->assign('SYNTAXHIGHLIGHTINGTHEME', $this->_conf->getKey('syntaxhighlightingtheme'));
        $page->assign('FORMATTER', $formatters);
        $page->assign('FORMATTERDEFAULT', $this->_conf->getKey('defaultformatter'));
        $page->assign('NOTICE', I18n::_($this->_conf->getKey('notice')));
        $page->assign('BURNAFTERREADINGSELECTED', $this->_conf->getKey('burnafterreadingselected'));
        $page->assign('PASSWORD', $this->_conf->getKey('password'));
        $page->assign('FILEUPLOAD', $this->_conf->getKey('fileupload'));
        $page->assign('ZEROBINCOMPATIBILITY', $this->_conf->getKey('zerobincompatibility'));
        $page->assign('LANGUAGESELECTION', $languageselection);
        $page->assign('LANGUAGES', I18n::getLanguageLabels(I18n::getAvailableLanguages()));
        $page->assign('EXPIRE', $expire);
        $page->assign('EXPIREDEFAULT', $this->_conf->getKey('default', 'expire'));
        $page->assign('EXPIRECLONE', !$this->_doesExpire || ($this->_doesExpire && $this->_conf->getKey('clone', 'expire')));
        $page->assign('URLSHORTENER', $this->_conf->getKey('urlshortener'));
        $page->draw($this->_conf->getKey('template'));
    }

    /**
     * outputs requested JSON-LD context
     *
     * @access private
     * @param string $type
     * @return void
     */
    private function _jsonld($type)
    {
        if (
            $type !== 'paste' && $type !== 'comment' &&
            $type !== 'pastemeta' && $type !== 'commentmeta'
        ) {
            $type = '';
        }
        $content = '{}';
        $file    = PUBLIC_PATH . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . $type . '.jsonld';
        if (is_readable($file)) {
            $content = str_replace(
                '?jsonld=',
                $this->_urlBase . '?jsonld=',
                file_get_contents($file)
            );
        }

        header('Content-type: application/ld+json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET');
        echo $content;
    }

    /**
     * prepares JSON encoded status message
     *
     * @access private
     * @param  int $status
     * @param  string $message
     * @param  array $other
     * @return void
     */
    private function _return_message($status, $message, $other = array())
    {
        $result = array('status' => $status);
        if ($status) {
            $result['message'] = I18n::_($message);
        } else {
            $result['id']  = $message;
            $result['url'] = $this->_urlBase . '?' . $message;
        }
        $result += $other;
        $this->_json = json_encode($result);
    }
}
