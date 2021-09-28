<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class videoStreamController extends Controller
{
    public function show($selected_video)
    {
        return view('pages.video-stream')->with("selected_video",$selected_video);
    }
}
