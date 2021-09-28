<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewDonationController extends Controller
{
    public function show()
    {
        return view('pages.view-donations');
    }
}
