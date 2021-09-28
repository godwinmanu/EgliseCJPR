<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilePageController extends Controller
{
    public function show()
    {
        return view('pages.profile-page');
    }
}
