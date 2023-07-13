<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all(); // O cualquier otra lógica para obtener la lista de eventos
        return response()->json($events);
    }
    
    public function store(Request $request)
    {
        $event = Event::create($request->all());

        return response()->json($event, 201);
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id); // O cualquier otra lógica para encontrar el evento por ID
        $event->update($request->all()); // O cualquier otra lógica para actualizar los campos del evento
        return response()->json($event);
    }
    
    public function destroy($id)
    {
        $event = Event::findOrFail($id); // O cualquier otra lógica para encontrar el evento por ID
        $event->delete(); // O cualquier otra lógica para eliminar el evento
        return response()->json(null, 204);
    }
    

}


