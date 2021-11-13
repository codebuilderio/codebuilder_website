<?php namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use \Stripe\Stripe;
use App\Models\Payment;
use App\Models\Invoice;
use Carbon\Carbon;

class PaypalController extends BaseController
{
    public function IPN(Request $request) {
        // STEP 1: Read POST data. reading posted data from directly from $_POST causes serialization. issues with array data in POST. reading raw POST data from input stream instead.
        $raw_post_data = file_get_contents('php://input');
        $raw_post_array = explode('&', $raw_post_data);
        $myPost = array();
        foreach ($raw_post_array as $keyval) {
          $keyval = explode ('=', $keyval);
          if (count($keyval) == 2)
             $myPost[$keyval[0]] = urldecode($keyval[1]);
        }
        // read the post from PayPal system and add 'cmd'
        $req = 'cmd=_notify-validate';
        if(function_exists('get_magic_quotes_gpc')) {
           $get_magic_quotes_exists = true;
        }
        foreach ($myPost as $key => $value) {
           if($get_magic_quotes_exists == true && get_magic_quotes_gpc() == 1) {
                $value = urlencode(stripslashes($value));
           } else {
                $value = urlencode($value);
           }
           $req .= "&$key=$value";
        }

        // STEP 2: Post IPN data back to paypal to validate
        $ch = curl_init('https://www.paypal.com/cgi-bin/webscr');
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
    
        // In wamp like environments that do not come bundled with root authority certificates,
        // please download 'cacert.pem' from "http://curl.haxx.se/docs/caextract.html" and set the directory path
        // of the certificate as shown below.
        // curl_setopt($ch, CURLOPT_CAINFO, dirname(__FILE__) . '/cacert.pem');
        if( !($res = curl_exec($ch)) ) {
            die("Got " . curl_error($ch) . " when processing IPN data");
            curl_close($ch);
            exit;
        }
        curl_close($ch);
    
    
        // STEP 3: Inspect IPN validation result and act accordingly
        if (strcmp ($res, "VERIFIED") == 0) {
            // assign posted variables to local variables
            $item_name = $request->input("item_name"); //$_POST['item_name'];
            $item_number = $request->input("item_number"); //$_POST['item_number'];
            $payment_status = $request->input("payment_status"); //$_POST['payment_status'];
            $payment_amount = $request->input("mc_gross"); //$_POST['mc_gross'];
            $payment_currency = $request->input("mc_currency"); //$_POST['mc_currency'];
            $txn_id = $request->input("txn_id"); //$_POST['txn_id'];
            $receiver_email = $request->input("receiver_email"); //$_POST['receiver_email'];
            $payer_email = $request->input("payer_email"); //$_POST['payer_email'];
    
            $custom = $request->input("custom"); //$_POST['custom'];
    
            //refund
            if($payment_amount <= 0) die();

            /* Update Invoice */
            $invoice = Invoice::where("identifier", "=", $custom)->first();
            $invoice->total_paid = $invoice->total_paid + $payment_amount;
            $invoice->total_unpaid = $invoice->usd_amount - $invoice->total_paid;
            $invoice->status = "paid";
            $invoice->paid_on = Carbon::now()->toDateTimeString();
            $invoice->save();

            /* Insert new payment */
            $payment = new Payment;
            $payment->identifier = $txn_id;
            $payment->usd_amount = (double) ($payment_amount);
            $payment->invoice_id = $invoice->id; 
            $payment->status = "confirmed";
            $payment->payment_type = "paypal";
            $payment->paid_on = Carbon::now()->toDateTimeString();
            $payment->save();
    
            //$colors = IRC::Colors();
            //IRC::Alert("[".$colors[green]."PAYPAL".$colors[nc]."] ".$item_name." ".$payment_status." ".$item_name."  ".$payment_amount." ".$payer_email." ", '#root');
            //Email::Send("4079686761@tmomail.net", "SMS", "paypal payment of ".$payment_amount." by ".$username." just confirmed", "admin@fuge.it");
    
        } else if (strcmp ($res, "INVALID") == 0) {
            $colors = IRC::Colors();
            IRC::Alert("[".$colors[red]."PAYPAL".$colors[nc]."] whoops ".$item_name." ".$payment_status." ".$item_name."  ".$payment_amount." ".$payer_email." ", '#notifications');
            $Form->Error("Whoops, there was a problem submitting your payment. Please try again...")->Redirect("/seedbox");
        }
    }
}