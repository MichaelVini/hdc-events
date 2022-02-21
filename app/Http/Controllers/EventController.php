<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class EventController extends Controller
{
    public function index() {
        $events = Event::all();

        return view('home', ['events' => $events]);
    }

    public function create() {
        return view('events.create');
    }

    public function store(Request $request) {
        $event = new Event();
        
        $event->title = $request->title;
        $event->description = $request->description;
        $event->city = $request->city;
        $event->private = $request->private;

        if($request->hasFile('image') && $request->file('image')->isValid()) {
            
            $requestImage = $request->image;
            $extensionImage = $requestImage->extension();
            
            $nameImage = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extensionImage;

            $requestImage->move(public_path('img/events'), $nameImage);

            $event->image = $nameImage;
        }

        $event->save();

        return redirect('/')->with('message', 'Evento criado com sucesso!');
    }
}
