<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Ensure honeypots exist so validation can require them to be empty
        $request->merge([
            'my_name' => $request->input('my_name', ''),
            'contact_me_by_fax_only' => $request->input('contact_me_by_fax_only', ''),
        ]);

        $validated = $request->validate([
            'name'                   => 'bail|required|string|max:255',
            'email'                  => 'bail|required|email',
            'message'                => 'bail|required|string',
            'submitted_at'           => 'required|integer|gt:0',
            'my_name'                => 'present|size:0',            // honeypot must be empty
            'contact_me_by_fax_only' => 'present|size:0',            // honeypot must be empty
            'g-recaptcha-response'   => 'required|string',
        ]);

        // Normalize submitted_at to seconds (guard against JS milliseconds)
        $submittedAt = (int) $validated['submitted_at'];
        if ($submittedAt > 2000000000) { // ~2033 in seconds; likely ms
            $submittedAt = intdiv($submittedAt, 1000);
        }

        // Verify reCAPTCHA v3
        try {
            $resp = Http::asForm()->post(
                'https://www.google.com/recaptcha/api/siteverify',
                [
                    'secret'   => config('services.recaptcha.secret_key'),
                    'response' => $validated['g-recaptcha-response'],
                    'remoteip' => $request->ip(),
                ]
            )->json();
        } catch (\Illuminate\Http\Client\ConnectionException $e) {
            report($e);
            throw ValidationException::withMessages([
                'captcha' => 'Verification service is temporarily unavailable. Please try again.',
            ]);
        }

        if (
            !($resp['success'] ?? false) ||
            ($resp['action'] ?? '') !== 'contact_form' ||
            ($resp['score'] ?? 0) < 0.5
        ) {
            throw ValidationException::withMessages([
                'captcha' => 'reCAPTCHA failed. Please try again.',
            ]);
        }

        // Time-trap: at least 5s to fill, not older than 2 hours
        $elapsed = now()->timestamp - $submittedAt;
        if ($elapsed < 5 || $elapsed > 7200) {
            throw ValidationException::withMessages([
                'captcha' => 'Form timing check failed.',
            ]);
        }

        // Send the mail (consider ->queue(...) + a ShouldQueue mailable)
        //        Mail::to(config('mail.to.address', 'studiothree.dance@gmail.com'))
        Mail::to(config('mail.to.address', 'studiothree.dance@gmail.com'))
            ->send(new ContactMail([
                'name'    => $validated['name'],
                'email'   => $validated['email'],
                'message' => $validated['message'],
            ]));

        return back()->with('message', "Thanks for your message. We'll be in touch.");
    }
}
