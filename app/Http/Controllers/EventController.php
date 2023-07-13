<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('calendar', compact('events'));
    }

    public function store(Request $request)
    {
        $event = new Event;
        $event->title = $request->input('title');
        $event->start_date = $request->input('start_date');
        $event->end_date = $request->input('end_date');
        $event->save();

        return redirect()->route('calendar');
    }

    public function update(Request $request, Event $event)
    {
        $event->title = $request->input('title');
        $event->start_date = $request->input('start_date');
        $event->end_date = $request->input('end_date');
        $event->save();

        return redirect()->route('calendar');
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('calendar');
    }
}
