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
use App\Models\Invoice;
use App\Models\Timesheet;

class AdminController extends Controller
{

    public function Index() {
    	$clients = Client::where("id", ">=", 1)->get();
    	$invoices = Invoice::where("id", ">=", 1)->get();
    	$timesheets = Timesheet::where("id", ">=", 1)->OrderBy("id", "DESC")->get();
		return view("admin.index", ["clients"=>$clients, "invoices"=>$invoices, "timesheets"=>$timesheets]);
    }

} 
