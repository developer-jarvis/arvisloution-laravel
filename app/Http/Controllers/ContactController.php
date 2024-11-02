<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact-us'); // Your contact form view
    }

    public function send(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Send the email
        Mail::send('emails.mail', $validatedData, function($message) use ($validatedData) {
            $message->to('princesingh2632002@gmail.com') // Replace with your email
                    ->subject('Contact Form Submission from ' . $validatedData['name']);
            $message->from($validatedData['email'], $validatedData['name']);
        });

        // Redirect back with a success message
        return redirect()->route('contact.index')->with('success', 'Thank you for contacting us!');
    }
}