<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class loginController extends Controller
{
    public function show()
    {
        return view('pages.login');
    }

    public function memberLogin(LoginRequest $loginRequest)
    {
        return view("pages.dashboard");
    }
}
