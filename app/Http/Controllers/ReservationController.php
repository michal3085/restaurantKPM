<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationMailRequest;

class ReservationController extends Controller
{
    public function sendMail(ReservationMailRequest $request)
    {
        dd($request);
    }
}
