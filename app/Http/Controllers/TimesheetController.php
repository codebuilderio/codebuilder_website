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
use App\Models\Client;
use App\ModelsApp\Models\Timesheet;
use App\Models\InvoiceItem;
use App\Models\Category;
use Carbon\Carbon;

class TimesheetController extends Controller
{
	public function Create(Request $request) {
		if(!$_POST) {
			$clients = Client::where("id", ">=", 1)->get();
			return view("admin.time.create", ["clients"=>$clients]);
		} else {

		$start = Carbon::parse($request->input('_start'));

		$end = Carbon::parse($request->input('_end'));

		$length = $start->diffInMinutes($end);

			$this->validate($request, [
				'_start' => 'required',
				'_end' => 'required',
				'description'=>'required'
			]);


			$timesheet = new TimeSheet;
			if($request->input('client_name') ) {
				$client_id = explode("(#", $request->input('client_name'));
				$client_id = substr(end($client_id), 0, -1);
				$timesheet->client_id = (int) $client_id;
			}
			if(!($timesheet->client_id)) $timesheet->client_id = 1;

			$timesheet->user_id = \Auth::user()->id;
			$timesheet->project_id  = $request->input('project_id') ? $request->input('project_id') : 0;
			$timesheet->description = $request->input("description");
			$timesheet->start  = $start;
			$timesheet->end = $end;
			$timesheet->mins = $length;
			$timesheet->save();

			return response()->json(["success"=>true]);

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
		$this->validate($request, [
			'name' => 'required',
		]);

		$invoice = Invoice::find($request->input("invoice_id"));
		$invoice->usd_amount  = $request->input("amount");			
		$invoice->total_unpaid  = $request->input("total_unpaid");
		$invoice->total_paid  = $request->input("total_paid");
		$invoice->description  = $request->input("description");
		$invoice->client_id = $request->input("client_id");
		$invoice->status  = $request->input("status");
		$invoice->payment_type = $request->input("payment_type");
		$invoice->paid_on  = $request->input("paid_on");
		$invoice->save();
	}

    public function viewList(Request $request) {
    	$timesheets = Timesheet::where("id", ">=", 1)->orderBy("id", "DESC")->paginate(15);
		return view("admin.time.list", ["timesheets"=>$timesheets]);
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
