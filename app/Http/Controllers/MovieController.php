<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function movie()
    {
        //ddd(Movie::all());
        $movies = Movie::all();

        return view('movies', compact('movies'));
    }
}
