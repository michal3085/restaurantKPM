<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationMailRequest;
use App\Mail\ReservationMail;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function sendMail(ReservationMailRequest $request)
    {
        // Production mail: H9123@accor.com
        Mail::to('H9123@accor.com')->send(new ReservationMail($request->all()));
 
        return view('mails.reservationConfirmation')->with(['menu' => 0]);
    }
}
