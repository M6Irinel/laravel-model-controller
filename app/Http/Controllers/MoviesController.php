<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MoviesModel;

class MoviesController extends Controller
{
    public function index() {

        $movies = MoviesModel::all();

        return view('movies', compact('movies'));
    }
}
