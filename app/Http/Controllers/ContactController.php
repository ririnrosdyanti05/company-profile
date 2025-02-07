<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContact(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Detail pesan yang akan dikirim
        $data = [
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'message' => $request->message,
        ];

        // Kirim email menggunakan Mail facade
        Mail::send('emails.contact', ['data' => $data], function($message) use ($data) {
            $message->from($data['email'], $data['name'] . ' ' . $data['surname']);
            $message->to('kirinririn686@gmail.com') // Ganti dengan email penerima
                    ->subject($data['name'] . ' ' . $data['surname']);
        });

        return back()->with('success', 'Pesan telah terkirim!');
    }
}
