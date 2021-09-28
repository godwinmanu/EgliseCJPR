<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resetPasswordController extends Controller
{
    public function show()
    {
        return view('pages.reset_password');
    }
}
