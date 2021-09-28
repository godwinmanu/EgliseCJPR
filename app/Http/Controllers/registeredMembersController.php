<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registeredMembersController extends Controller
{
    public function show()
    {
        return view('pages.registered-members');
    }
}
