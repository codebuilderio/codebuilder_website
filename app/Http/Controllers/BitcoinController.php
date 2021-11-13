<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use BitWasp\Bitcoin\Bitcoin;
use BitWasp\Bitcoin\Address;
use BitWasp\Bitcoin\Key\PrivateKeyFactory;
use App\Models\BitcoinAddress;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Models\Invoice;
use BitcoinVietnam\BitcoinAverage;

class BitcoinController extends BaseController
{
    public function newAddress(Request $request) {
        /* If belongs to invoice */
        if($request->input("invoice_id")) {
            $invoice = Invoice::where("identifier", "=", $request->input("invoice_id"))->first();
            if(!isset($invoice->id)) return response()->json(['error' => 'Invoice not found.']);
        }

        /* Generate new address */
        $network = Bitcoin::getNetwork();
        $privateKey = PrivateKeyFactory::create(true);
        $publicKey = $privateKey->getPublicKey();
        $privWif = $privateKey->toWif($network);
        $privHex = $privateKey->getHex();
        $pubHex = $publicKey->getHex();
        $pubHash = $publicKey->getPubKeyHash()->getHex();
        $pubAddr = $publicKey->getAddress()->getAddress();

        /* Insert address into db */
        $address = new \App\BitcoinAddress;
        $address->private_key_wif = Crypt::encryptString($privWif);
        $address->private_key_hex = Crypt::encryptString($privHex);
        $address->public_key_hex = $pubHex;
        $address->public_key_hash = $pubHash;
        $address->received_balance = 0;
        $address->last_checked = Carbon::now()->toDateTimeString();
        $address->invoice_id = isset($invoice->id) ? $invoice->id : 0;
        $address->public_key_address = $pubAddr;
        $address->user_id = 0;
        $address->save();

        return response()->json(['address'=>$pubAddr]);
    }

    static function checkBalance($address) {
        $balance = file_get_contents('https://blockchain.info/de/q/addressbalance/'. $address);
        return response()->json(['balance'=>$pubAddr]);
    }

    public function convertUSD() {

        $client = new BitcoinAverage\Client($apiKey = "", $apiSecret = "");
        $conversion = $client->getTickerPerSymbol("BTCUSD", "global");
        return response()->json(['usd_last'=>$conversion->getLast()]);
    }

} 
