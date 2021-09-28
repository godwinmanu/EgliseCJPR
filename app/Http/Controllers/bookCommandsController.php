<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookCommandsController extends Controller
{
    public function show()
    {
        return view('pages.book-commands');
    }
}
