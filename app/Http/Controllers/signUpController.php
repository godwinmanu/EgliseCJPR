<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterMemberRequest;

class signUpController extends Controller
{
    public function show()
    {
        return view('pages.signup');
    }

    public function registerMember(RegisterMemberRequest $registerMemberRequest)
    {
        return view('pages.dashboard');
    }
}
