<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Sector;
use Illuminate\Http\Request;

class MainHomePageController extends Controller
{
    public function index(){
        $sectors = Sector::all();
        $events = Event::all();
        $main_event = Event::latest()->take(1)->first();
        // dd($events , $main_event);
        return view('orionccFront.index', compact('sectors','events' , 'main_event'));
    }
}
