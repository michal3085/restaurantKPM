<?php

namespace App\Http\Controllers;

class EventsController extends Controller
{
    public function showEvent($event)
    {
        return view('main.events.' . $event)->with(['menu' => 0]);
    }
}
