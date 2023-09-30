<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationMailRequest;
use App\Mail\ReservationMail;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function sendMail(ReservationMailRequest $request)
    {
        Mail::to('michal3085@gmail.com')->send(new ReservationMail($request->all()));

        return view('mails.confirm')->with(['menu' => 0]);
    }
}
