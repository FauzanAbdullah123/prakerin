<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventKontroller extends Controller
{
    public function index()
    {
        $event = Event::orderBy('created_at', 'desc')->get();
        return view('admin.event.index', compact('event'));
    }
}
