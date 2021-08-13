<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
    
        return view('welcome', ['events' => $events ]);
    }

    public function create (){
        return view('events.create');
    }

    public function store (Request $request){
        $event = new Event;
        
        $event->title = $request->title;
        $event->description = $request->description;
        $event->private = $request->private;
        $event->city = $request->city;

        $event->save();
        
        return redirect('/');
    }
}
