<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutUsController extends Controller
{
    public function show()
    {
        return view('pages.about_us');
    }
}
