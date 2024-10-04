<?php

namespace App\Http\Controllers;

use App\Models\Sector;
use Illuminate\Http\Request;

class MainHomePageController extends Controller
{
    public function index(){
        $sectors = Sector::all();
        return view('orionccFront.index', compact('sectors'));
    }
}
