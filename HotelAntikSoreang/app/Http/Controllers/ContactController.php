<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function show()
    {
        return view("FP.contact");
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email",
            "phone" => "required|string",
            "message" => "required|string"
        ]);

        Mail::to(config("mail.from.address", "info@hotelantik.com"))
            ->send(new \App\Mail\ContactMail($validated));

        return back()->with("success", "Pesan Anda berhasil dikirim! Kami akan hubungi segera.");
    }
}
