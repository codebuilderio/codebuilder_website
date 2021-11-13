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
use App\Models\Project;

class ClientController extends Controller
{
    public function Create(Request $request) {
		if(!$_POST) {
			return view("admin.client.new");
		} else {
			$this->validate($request, [
			    'name' => 'required',
			]);

			$client = new Client;
			$client->name = $request->input("name");
			$client->email = $request->input("email");
			$client->phone_number = $request->input("phone");
			$client->fax_number = $request->input("fax");
			$client->firm = $request->input("firm");
			$client->address = $request->input("address");
			$client->save();
		}
    }

    public function Read($id) {
	    $client = Client::find($id);
	    return view("admin.client.edit", ["client"=>$client]);
    }

    public function Update(Request $request) {
		$this->validate($request, [
		    'name' => 'required',
		]);

		$client = Client::find($request->input("client_id"));
		$client->name = $request->input("name");
		$client->email = $request->input("email");
		$client->phone_number = $request->input("phone");
		$client->fax_number = $request->input("fax");
		$client->firm = $request->input("firm");
		$client->address = $request->input("address");
		$client->save();
	}

    public function viewList(Request $request) {
    	$clients = Client::where("id", ">=", 1)->orderBy("id", "DESC")->paginate(15);
		return view("admin.client.list", ["clients"=>$clients]);
	}

    public function API_Client_Search(Request $request) {
        $output = Array();
        $results = Client::where('name', "LIKE", "%".$request->input("phrase")."%")
        				->orWhere('firm', "LIKE", "%".$request->input("phrase")."%")
                       ->orderBy('name', 'desc')
                       ->take(10)
                       ->get();

        foreach($results as $res) {
        	$return = $res->name." (#".$res->id.")";
        	$arr = Array();

        	$projects = Project::where("client_id", "=", $res->id)->get();
        	foreach($projects as $project) $arr[$project->id] = ["title"=>$project->title];

            $output[] = Array("name"=>($return), "type"=>$res->firm, "projects"=>$arr);
        }

        if(count($output)) return response()->json($output);   
     }

} 
