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

class StripeController extends BaseController
{
    public function ChargeToken(Request $request) {
    	$success = false;
    	try {
			\Stripe\Stripe::setApiKey(env('STRIPE_API_LIVE', ''));
			$stripe_amt = (int)($request->input("usd_amount") * 100);
			$charge = \Stripe\Charge::create(array('amount' => $stripe_amt,
			                                       'currency' => 'usd',
			                                       'source' => $request->input("t") ));
			$success = 1;
		} catch(Stripe_CardError $e) {
		  return response()->json(['error' => $e->getMessage()]);
		} catch (Stripe_InvalidRequestError $e) {
		  // Invalid parameters were supplied to Stripe's API
		  return response()->json(['error' => $e->getMessage()]);
		} catch (Stripe_AuthenticationError $e) {
		  // Authentication with Stripe's API failed
		  $error3 = $e->getMessage();
		} catch (Stripe_ApiConnectionError $e) {
		  // Network communication with Stripe failed
		  return response()->json(['error' => $e->getMessage()]);
		} catch (Stripe_Error $e) {
		  // Display a very generic error to the user, and maybe send
		  // yourself an email
		  return response()->json(['error' => $e->getMessage()]);
		} catch (Stripe\Error\Base $e) {
			  // Code to do something with the $e exception object when an error occurs
			  return response()->json(['error' => $e->getMessage()]);
		} catch (Exception $e) {
		  // Something else happened, completely unrelated to Stripe
		  return response()->json(['error' => $e->getMessage()]);
		}

		if(!$success) {
			return response()->json(['error' => 'Unknown Error.']);
		} else {
			$invoice = Invoice::where("identifier", "=", $request->input("invoice_id"))->first();
			if(!isset($invoice->id)) return response()->json(['error' => 'Invoice not found.']);

			$payment = new Payment;
			$payment->identifier = $charge->id;
			$payment->usd_amount = (double) ($charge->amount/100);
			$payment->invoice_id = $invoice->id; 
			$payment->status = "confirmed";
			$payment->payment_type = "stripe";
			$payment->paid_on = Carbon::now()->toDateTimeString();
			$payment->save();

			$invoice->paid_on = Carbon::now()->toDateTimeString();
			$invoice->total_unpaid = $invoice->total_unpaid - $payment->usd_amount;
			$invoice->total_paid = $invoice->total_paid + $payment->usd_amount;
			if ($invoice->total_unpaid == 0) {
				$invoice->status = "paid";
			} else {
				$invoice->status = "partial";
			}
			$invoice->save();
		}
    }
}
