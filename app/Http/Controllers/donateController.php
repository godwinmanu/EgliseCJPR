<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class donateController extends Controller
{
    public function show()
    {
        return view('pages.donate');
    }
}
