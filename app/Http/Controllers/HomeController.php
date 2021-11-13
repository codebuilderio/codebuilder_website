<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->middleware('auth');
        return view('home');
    }

    public function userNotify(Request $request) {

        $location = geoip()->getLocation(\Request::ip());
        $city = $location->city;
        $state = $location->state;
        $country = $location->country;
        $page = $request->input("page");
        $tcp_echobot_password = env("tcp_echobot_password", ""); 

        $cmd = $tcp_echobot_password." ".\Request::ip()." visiting ".str_replace("https://", "", $page)." from ".$city.",".$state." (".$country.")";
        $fp = fsockopen("tcp://subtlefu.ge", 1337, $errno, $errstr, 30);
        if(!$cmd) return "no command given...";
        if(!$fp)  return "conn. refused";
                
        $response = "";
        fwrite($fp, $cmd);
        //while (!feof($fp)) {
        //        $response .= fgets($fp, 128);
        //}
        fclose($fp);

    }

}
