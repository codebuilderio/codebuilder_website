<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use BitWasp\Bitcoin\Bitcoin;
use BitWasp\Bitcoin\Address;
use BitWasp\Bitcoin\Key\PrivateKeyFactory;
use \App\Models\Client;
use \App\Models\Invoice;
use \App\Models\InvoiceItem;
use \App\Models\Category;

class InvoiceController extends Controller
{
	public function Create(Request $request) {
		if(!$_POST) {
			$clients = Client::where("id", ">=", 1)->get();
			return view("admin.invoice.new", ["clients"=>$clients]);
		} else {

			$invoice = new Invoice;
			$invoice->usd_amount  = 0;
			$invoice->identifier  = str_random(12);

			$client = null;
			if($request->input('client_name') ) {
				$client_id = explode("(#", $request->input('client_name'));
				$client_id = substr(end($client_id), 0, -1);
				$invoice->client_id = (int) $client_id;
				$client = Client::find($client_id);
			}

			if(!($client))  return response()->json(['error' => 'Invalid Client.'], 403);

			$invoice->status  = $request->input("status");
			$invoice->project_id  = $request->input("project_id");
			$invoice->payment_type = "";
			$invoice->total_paid = 0;
			$invoice->total_unpaid = 0;
			$invoice->paid_on  = $request->input("paid_on");
			$invoice->save();


			/* Validate Line Items & Sort Into Workable Array */
			$itemC = 0; $items = Array();
			foreach($request->input("rate.*") as $item) {
				$itemC++;
				$items[$itemC]["rate"] = $item;
			}
			$itemC = 0;
			foreach($request->input("hours.*") as $item) {
				$itemC++;
				$items[$itemC]["hours"] = $item;
			}
			$itemC = 0;
			foreach($request->input("description.*") as $item) {
				$itemC++;
				$items[$itemC]["description"] = $item;
			}
			$itemC = 0;
			foreach($request->input("category_id.*") as $item) {
				$itemC++;
				$items[$itemC]["category_id"] = $item;
			}

			/* Loop sorted line items & insert into database. Also calulate totals from line_items */
			$total = 0;
			for($i = 1, $size = count($items); $i <= $size; $i++) {
				if($items[$i]["hours"] == "") continue;
				$total = $total + ($items[$i]["hours"]*$items[$i]["rate"]);

				$item = new InvoiceItem;
				$item->category_id  = $items[$i]["category_id"];
				$item->invoice_id  = $invoice->id;
				$item->hours = $items[$i]["hours"];
				$item->description = $items[$i]["description"];
				$item->rate  = $items[$i]["rate"];
				$item->save();
			}

			/* Update invoice totals based on line item calculation */
			$invoice->usd_amount = $total;
			$invoice->total_unpaid = $total;
			$invoice->save();

			return response()->json(["success"=>true, "invoice_id"=>$invoice->id]);
		}
	}

	public function Read($id) {
		$invoice = Invoice::where("identifier", "=", $id)->first();
		if(!isset($invoice->id)) return response()->json(['error' => 'Invoice not found.']);

		return view("invoice.index", [
			"invoice"=>$invoice, 
		]);
	}

	public function adminRead($id) {
		$invoice = Invoice::find($id);
		$clients = Client::where("id", ">=", 1)->get();
		return view("admin.invoice.edit", [
			"invoice"=>$invoice, 
			"clients"=>$clients,
		]);
	}

	public function Update(Request $request) {

		$invoice = Invoice::find($request->input("invoice_id"));
		$invoice->total_unpaid  = $request->input("total_unpaid");
		$invoice->total_paid  = $request->input("total_paid");
		$client = null;
		if($request->input('client_name') ) {
			$client_id = explode("(#", $request->input('client_name'));
			$client_id = substr(end($client_id), 0, -1);
			$invoice->client_id = (int) $client_id;
			$client = Client::find($client_id);
		}

		if(!($client)) return Response::json(['error' => 'Invalid Client.'], 403); // Status code here


		$invoice->status  = $request->input("status");
		$invoice->paid_on  = $request->input("paid_on");
		$invoice->project_id  = $request->input("project_id");
		$invoice->save();

		/* Delete invoice items and start over with what was posted */
		InvoiceItem::where("invoice_id", "=", $invoice->id)->delete();


		/* Validate Line Items & Sort Into Workable Array */
		$itemC = 0; $items = Array();
		foreach($request->input("rate.*") as $item) {
			$itemC++;
			$items[$itemC]["rate"] = $item;
		}
		$itemC = 0;
		foreach($request->input("hours.*") as $item) {
			$itemC++;
			$items[$itemC]["hours"] = $item;
		}
		$itemC = 0;
		foreach($request->input("description.*") as $item) {
			$itemC++;
			$items[$itemC]["description"] = $item;
		}
		$itemC = 0;
		foreach($request->input("category_id.*") as $item) {
			$itemC++;
			$items[$itemC]["category_id"] = $item;
		}

		/* Loop sorted line items & insert into database. Also calulate totals from line_items */
		$total = 0;
		for($i = 1, $size = count($items); $i <= $size; $i++) {
			if($items[$i]["hours"] == "") continue;
			$total = $total + ($items[$i]["hours"]*$items[$i]["rate"]);

			$item = new InvoiceItem;
			$item->category_id  = $items[$i]["category_id"];
			$item->invoice_id  = $invoice->id;
			$item->hours = $items[$i]["hours"];
			$item->description = $items[$i]["description"];
			$item->rate  = $items[$i]["rate"];
			$item->save();
		}

		/* Update invoice totals based on line item calculation */
		$invoice->usd_amount = $total;
		$invoice->save();

		
		return response()->json(["success"=>true, "invoice_id"=>$invoice->id]);

	}

    public function viewList(Request $request) {
    	$invoices = Invoice::where("id", ">=", 1)->orderBy("id", "DESC")->paginate(15);
		return view("admin.invoice.list", ["invoices"=>$invoices]);
	}


	/* Invoice Lookup API */
	public function ajaxLookup($id) {
		$invoice = Invoice::where("identifier", "=", $id)->first();
		if(!isset($invoice->id)) return response()->json(['error' => 'Invoice not found.']);
		$lineItems = $invoice->LineItems;

		/* Serialize Invoice Items */
		foreach($lineItems as $item) $items[] = Array( 
			"category" => $item->Category->title,
			"hours" => $item->hours,
			"rate" => $item->rate,
		);

		$invoice = (object) Array(
			"identifier" => $invoice->identifier,
			"usd_amount" => (double) $invoice->usd_amount,
			"total_unpaid" => (double) $invoice->total_unpaid,
			"total_paid" => (double) $invoice->total_paid,
			"items" => $items
		);

		return response()->json([
				'invoice' => $invoice
			]);
	}

	/* Line Items Controller Functions */

	public function LineItemCreate(Request $request) {
		$this->validate($request, [
			'category_id' => 'required',
			'invoice_id' => 'required',
			'hours' => 'required',
			'rate' => 'required',
		]);

		$item = new InvoiceItem;
		$item->category_id  = $request->input("category_id");
		$item->invoice_id  = $request->input("invoice_id");
		$item->hours = $request->input("hours");
		$item->rate  = $request->input("rate");
		$item->save();
	}

	public function LineItemUpdate(Request $request) {
		$this->validate($request, [
			'category_id' => 'required',
			'invoice_id' => 'required',
			'hours' => 'required',
			'rate' => 'required',
		]);

		$item = InvoiceItem::find($request->input("invoice_id"));
		$item->category_id  = $request->input("usd_amount");
		$item->invoice_id  = $request->input("invoice_id");
		$item->hours = $request->input("hours");
		$item->rate  = $request->input("rate");
		$item->save();
	}

} 
