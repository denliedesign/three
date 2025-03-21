<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];

        Mail::to('studiothree.dance@gmail.com')->send(new ContactMail($details));

        return redirect('/')->with('message', 'Thanks for your message. We\'ll be in touch.');
    }

}
