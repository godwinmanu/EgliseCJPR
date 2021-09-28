<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postBookController extends Controller
{
    public function show()
    {
        return view('pages.post-books');
    }
}
