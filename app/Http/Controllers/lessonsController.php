<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lessonsController extends Controller
{
    public function show($lesson)
    {
        return view('pages.lessons')->with("lesson",$lesson);
    }
}
