<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContactMail(ContactRequest $request)
    {
        Mail::to('H9123@accor.com')->send(new ContactMail($request->all()));

        return view('mails.reservationConfirmation')->with(['menu' => 0]);
    }
}
