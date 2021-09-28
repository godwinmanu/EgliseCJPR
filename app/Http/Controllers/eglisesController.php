<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eglisesController extends Controller
{
    public function show($churchName)
    {
        return view("pages.eglises")->with("eglise",$churchName);
    }
}
