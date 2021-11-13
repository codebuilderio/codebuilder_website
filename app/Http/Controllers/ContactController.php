<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Mail;

class ContactController extends BaseController
{
    public function contactForm(Request $request) {
        Mail::send('emails.contactus', ["request"=>$request], function ($message) {
            $message->from('andrew@codebuilder.us', 'CodeBuilder Inc.');
            $message->subject('Contact Request - CodeBuilder, Inc.');
            $message->to('andrew@codebuilder.us');
        });
    }

} 
