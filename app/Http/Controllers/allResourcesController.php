<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class allResourcesController extends Controller
{
    public function show()
    {
        return view('pages.all-resources');
    }
}
