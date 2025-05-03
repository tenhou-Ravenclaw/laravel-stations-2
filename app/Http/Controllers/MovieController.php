<?php

namespace App\Http\Controllers;
use App\Models\Movie; // Movieモデルをインポート

class MovieController extends Controller
{
    public function movies()
    {
        $movies = Movie::all();
        return view('movies', ['movies' => $movies]);
    }

    public function movie()
    {
        $movies = Movie::all();
        return view('admin/movies', ['movies' => $movies]);
    }
}