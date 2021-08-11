<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;
use stdClass;

class ContactController extends Controller
{
    public function sendMail(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message'=>'required'
        ]);
        $user = new stdClass();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->subject = $validated['subject'];
        $user->message = $validated['message'];
        //sending email to admin mail address
        $admin_email = env('MAIL_FROM_ADDRESS');
        Mail::to($admin_email)->send(new ContactMail($user));
        return back();
    }
}
