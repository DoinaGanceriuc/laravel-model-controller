<?php

namespace App\Http\Controllers;

class MovieController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function movie()
    {
        return view('movies');
    }
}
