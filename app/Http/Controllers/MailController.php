<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;

class MailController extends Controller
{
    public function sendmail(Request $request){
        if($request->has('message') && ($request->has('sendemail'))){

            $body = ['message' => $request->message];

            Mail::send('mail.newmail', ['body' => $body], function($message) use ($request){
                $message->to('theonlysushanpaudyal@gmail.com')->from('noreply@maileapp.com', 'Mail App Service')->subject($request->subject);
            });



            Session::flash('flashmessage', 'Mail Sent Successfully');
            return redirect()->back();
        }
    }
}
