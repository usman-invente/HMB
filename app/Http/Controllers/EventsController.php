<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{

    public function index(){
        $events = Event::paginate('9');
        return view('events.event',compact('events'));
    }

    public function singleEvent(Event $event){

        return view('events.single_event',compact('event'));

    }


}
