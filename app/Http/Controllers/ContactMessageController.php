<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

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

        return redirect()->route('contact')->with('success', 'Message envoyé !');

    }
}
