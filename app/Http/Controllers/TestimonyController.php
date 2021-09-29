<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TestimonyRequest;

class TestimonyController extends Controller
{
    public function storeTestimony(TestimonyRequest $testimonyRequest)
    {
        return view('pages.welcome');
    }
}
