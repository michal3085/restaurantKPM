<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function showEvent($event)
    {
        return view('main.events.' . $event)->with(['menu' => 0]);
    }
}
