<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class booksController extends Controller
{
    public function show($selected_book)
    {
        return view('pages.books')->with("selected_book",$selected_book);
    }
}
