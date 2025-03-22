<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Merge default values so honeypot fields are always present
        $request->merge([
            'my_name' => $request->input('my_name', ''),
            'contact_me_by_fax_only' => $request->input('contact_me_by_fax_only', '')
        ]);

        // Validate the request data
        $validated = $request->validate([
            'name'                  => 'required|string|max:255',
            'email'                 => 'required|email',
            'message'               => 'required|string',
            'submitted_at'          => 'required|numeric',
            // Honeypot fields must be empty; max:0 ensures an empty string passes
            'my_name'               => 'max:0',
            'contact_me_by_fax_only'=> 'max:0'
        ]);

        // Honeypot timing check to deter bots
        $submittedAt = $validated['submitted_at'];
        if (Carbon::createFromTimestamp($submittedAt)->diffInSeconds(now()) < 5) {
            return redirect('/')->with('message', 'Form submitted too quickly.');
        }

        // Prepare details for the email
        $details = [
            'name'                  => $validated['name'],
            'email'                 => $validated['email'],
            'message'               => $validated['message'],
            'my_name'               => $validated['my_name'],
            'contact_me_by_fax_only'=> $validated['contact_me_by_fax_only'],
            'submitted_at'          => $validated['submitted_at']
        ];

        Mail::to('customdenlie@gmail.com')->send(new ContactMail($details));

        return redirect('/')->with('message', 'Thanks for your message. We\'ll be in touch.');
    }
}
