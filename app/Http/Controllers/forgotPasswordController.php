<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class forgotPasswordController extends Controller
{
    public function show()
    {
        return view('pages.forgot_password');
    }
}
