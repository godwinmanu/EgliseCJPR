<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactUsFormRequest;

class welcomeController extends Controller
{
    public function index()
    {
        return view('pages.welcome');
    }

    public function submitContactForm()
    {
        return view('pages.welcome');
    }

    public function newsletterForm()
    {
        return view('pages.welcome');
    }
}
