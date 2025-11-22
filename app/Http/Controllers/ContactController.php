<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function sendEnquiry(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'phone'   => 'required',
            'email'   => 'required|email',
            'message' => 'required',
        ]);

        // kirim email
        Mail::to("info@gadgetnio.com")->send(new ContactMail($request->all()));

        return back()->with('success', 'Your message has been sent!');
    }
}
