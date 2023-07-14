<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class CalendarController extends Controller
{
    public function index()
    {
        $events = [];
        $data = Evento::all();
        if($data->count()){
            foreach ($data as $key => $value) {
                $events[] = [
                    'title' => $value->titulo,
                    'start' => $value->fecha_inicio,
                    'end' => $value->fecha_fin
                ];
            }
        }
        return view('calendar', compact('events'));
    }
}

