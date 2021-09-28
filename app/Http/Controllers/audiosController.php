<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class audiosController extends Controller
{
    public function show()
    {
        return view('pages.audios');
    }
}
