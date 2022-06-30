<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;
// use Mail;

class ContactMessageController extends Controller
{
    public function sendMessage(Request $request) {

        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'subject' => ['required', 'string'],
            'message' => ['required', 'string'],
        ]);
        // return back()->withInput():

        ContactMessage::create([
         'name' => $request->name,
         'email' => $request->email,
         'subject' => $request->subject,
         'message' => $request->message,
        ]);

            // Mail::send('mail', $data, function($message) {
            //     $message->to($request->email, 'Tutorials Point')->subject($request->subject);
            //     $message->from('xyz@gmail.com',$request->name);
            // });

        return redirect()->route('contact')->with('success', 'Message envoyé !');

    }

}
