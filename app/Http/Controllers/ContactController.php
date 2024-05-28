<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'mail' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        $details = [
            'name' => $request->name,
            'mail' => $request->mail,
            'message' => $request->message,
        ];

        Mail::to('info@studiodentisticogiammy.it')->send(new ContactMail($details));

        return redirect()->route('contact')->with('success', 'Messaggio inviato con successo!');
    }
}
