<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newsControllers extends Controller
{
    public function show()
    {
        return view('pages.news');
    }
}
