<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterAdminRequest;
use App\Http\Requests\RegisterMemberRequest;

class registeredMembersController extends Controller
{
    public function show()
    {
        return view('pages.registered-members');
    }

    public function registerSimpleMember(RegisterMemberRequest $registerMemberRequest)
    {
        return view('pages.dashbord');
    }
}
