<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use \App\Http\Controllers\InvoiceController;
use \App\Http\Controllers\ClientController;
use \App\Http\Controllers\BlogController;
use \App\Http\Controllers\StripeController;
use \App\Http\Controllers\BitcoinController;
use \App\Http\Controllers\PayPalController;
use \App\Http\Controllers\ContactController;
use \App\Http\Controllers\FileController;
use \App\Http\Controllers\TimesheetController;




Route::get('/', function () {
    $ajax = false;

    $irc = new \App\Http\Controllers\IRCController;
    $colors = $irc->colors();
    $irc->alert("[".$colors["green"]."CodeBuilder".$colors["nc"]."] ".get_ip()." just visited ".\Request::url(), '#visitors');

    return view('welcome');
});

Route::get('/about', function () {
    $ajax = false;

    $irc = new \App\Http\Controllers\IRCController;
    $colors = $irc->colors();
    $irc->alert("[".$colors["green"]."CodeBuilder".$colors["nc"]."] ".get_ip()." just visited ".\Request::url(), '#visitors');


    return view('about');
});

Route::get('/services', function () {
    $ajax = false;

    $irc = new \App\Http\Controllers\IRCController;
    $colors = $irc->colors();
    $irc->alert("[".$colors["green"]."CodeBuilder".$colors["nc"]."] ".get_ip()." just visited ".\Request::url(), '#visitors');


    return view('services');
});

Route::get('/portfolio', function () {
    $ajax = false;


    $irc = new \App\Http\Controllers\IRCController;
    $colors = $irc->colors();
    $irc->alert("[".$colors["green"]."CodeBuilder".$colors["nc"]."] ".get_ip()." just visited ".\Request::url(), '#visitors');
  
    return view('portfolio');
});

/*Route::get('/faq', function () {
    $ajax = false;
    return view('faq');
});*/

Route::get('/contact', function () {
    $ajax = false;

    $irc = new \App\Http\Controllers\IRCController;
    $colors = $irc->colors();
    $irc->alert("[".$colors["green"]."CodeBuilder".$colors["nc"]."] ".get_ip()." just visited ".\Request::url(), '#visitors');


    return view('contact');
});

Route::get('/technology', function () {
    $ajax = false;

    $irc = new \App\Http\Controllers\IRCController;
    $colors = $irc->colors();
    $irc->alert("[".$colors["green"]."CodeBuilder".$colors["nc"]."] ".get_ip()." just visited ".\Request::url(), '#visitors');


    return view('technology');
});

Route::get('/privacypolicy', function () {
    $ajax = false;

    $irc = new \App\Http\Controllers\IRCController;
    $colors = $irc->colors();
    $irc->alert("[".$colors["green"]."CodeBuilder".$colors["nc"]."] ".get_ip()." just visited ".\Request::url(), '#visitors');


    return view('privacypolicy');
});

Route::get('/tos', function () {
    $ajax = false;

    $irc = new \App\Http\Controllers\IRCController;
    $colors = $irc->colors();
    $irc->alert("[".$colors["green"]."CodeBuilder".$colors["nc"]."] ".get_ip()." just visited ".\Request::url(), '#visitors');


    return view('tos');
});


Route::get('/invoice/{id}', "\App\Http\Controllers\InvoiceController@Read");


Route::get('/blog', function () {
    $ajax = false;
    return view('blog.index');
});
Route::get('/blog/{id}', function () {
    $ajax = false;
    return view('blog.post');
});


Route::get('/tools/whois', function () {
    $ajax = false;
    return view('tools.whois');
});


Route::group(['middleware' => ['auth']], function() {
    Route::get('/admin', "\App\Http\Controllers\AdminController@index");

    /* Client Routes */
    Route::post('/admin/client/new', "\App\Http\Controllers\ClientController@Create");
    Route::get('/admin/client/new', "\App\Http\Controllers\ClientController@Create");
    Route::get('/admin/client/view/{id}', "\App\Http\Controllers\ClientController@Read");
    Route::post('/admin/client/update/{id}', "\App\Http\Controllers\ClientController@Update");
    Route::get('/admin/clients', "\App\Http\Controllers\ClientController@viewList");
    Route::get('/admin/api/client/search', "\App\Http\Controllers\ClientController@API_Client_Search");


    /* Blog Post Routes */
    Route::post('/admin/blog/new', "\App\Http\Controllers\BlogController@Create");
    Route::get('/admin/blog/new', "\App\Http\Controllers\BlogController@Create");
    Route::get('/admin/blog/update/{id}', "\App\Http\Controllers\BlogController@Edit");
    Route::post('/admin/blog/update/{id}', "\App\Http\Controllers\BlogController@Update");
    Route::get('/admin/blog', "\App\Http\Controllers\BlogController@viewList");

    /* Timesheet Routes */
    Route::post('/admin/timesheet/new', "\App\Http\Controllers\TimesheetController@Create");
    Route::get('/admin/timesheet/new', "\App\Http\Controllers\TimesheetController@Create");
    Route::get('/admin/timesheets', "\App\Http\Controllers\TimesheetController@viewList");

    /* Invoice Routes */
    Route::post('/admin/invoice/new', "\App\Http\Controllers\InvoiceController@Create");
    Route::get('/admin/invoice/new', "\App\Http\Controllers\InvoiceController@Create");
    Route::get('/admin/invoice/view/{id}', "\App\Http\Controllers\InvoiceController@adminRead");
    Route::post('/admin/invoice/update/{id}', "\App\Http\Controllers\InvoiceController@Update");
    Route::get('/admin/invoices', "\App\Http\Controllers\InvoiceController@viewList");


    /* Payments Management Routes */
    Route::get('/admin/payment/view/{id}', "\App\Http\Controllers\PaymentController@adminRead");
    Route::post('/admin/payment/update/{id}', "\App\Http\Controllers\PaymentController@Update");
    Route::get('/admin/payments', "\App\Http\Controllers\PaymentController@viewList");


    /* Line Items Routes */
    Route::post('/admin/invoice/line_item/new', "\App\Http\Controllers\InvoiceController@LineItemCreate");
    Route::post('/admin/invoice/line_item/update/{id}', "\App\Http\Controllers\InvoiceController@LineItemUpdate");

    /* File Manager Routes */
    Route::get('/admin/files', "\App\Http\Controllers\FileController@viewList");
    Route::post('/admin/file/upload', "\App\Http\Controllers\FileController@postUpload");



});

Route::get('/stats', "\App\Http\Controllers\HomeController@userNotify");


Route::get('/invoice/lookup/{id}', "\App\Http\Controllers\InvoiceController@ajaxLookup");

/* Payments Routes */
Route::get('/payment/stripe/token', "\App\Http\Controllers\StripeController@ChargeToken");
Route::get('/payment/bitcoin/address', "\App\Http\Controllers\BitcoinController@newAddress");
Route::get('/payment/bitcoin/check-balance', "\App\Http\Controllers\BitcoinController@checkBalance");
Route::get('/payment/bitcoin/usd-conversion', "\App\Http\Controllers\BitcoinController@convertUSD");
Route::post('/payment/paypal/ipn', "\App\Http\Controllers\PayPalController@IPN");


Route::post('/contact/submit', "\App\Http\Controllers\ContactController@contactForm");


Route::get('/blog/view/{id}', "\App\Http\Controllers\BlogController@Read");



/* Payment Routes */
Route::get('/test', "\App\Http\Controllers\BitcoinController@test");
Route::get('/stripetest', "\App\Http\Controllers\StripeController@test");

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function () {
    $ajax = false;
    return view('welcome');
})->name("home");





function get_ip() {
    # | 'HTTP_CLIENT_IP' | 'CLIENT_IP'
    if(isset($_SERVER['REMOTE_ADDR']))
    {
        return($_SERVER['REMOTE_ADDR']);
    }
    elseif(getenv('REMOTE_ADDR'))
    {
        return(getenv('REMOTE_ADDR'));
    }
    elseif(isset($HTTP_SERVER_VARS['REMOTE_ADDR']))
    {
        return($HTTP_SERVER_VARS['REMOTE_ADDR']);
    }
    else
    {
        return(false);
    }
}