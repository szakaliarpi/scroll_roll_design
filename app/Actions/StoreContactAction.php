<?php

namespace App\Actions;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StoreContactAction
{
    public function execute(Request $request)
    {
        $data = $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactFormMail($data));

        return response()->json(['success' => true, 'message' => 'sent']);
    }
}
