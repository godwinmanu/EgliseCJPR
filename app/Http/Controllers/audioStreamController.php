<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class audioStreamController extends Controller
{
    public function show($selected_audio)
    {
        return view('pages.audio-stream')->with("selected_audio",$selected_audio);
    }
}
