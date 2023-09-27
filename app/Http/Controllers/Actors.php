<?php

namespace App\Http\Controllers;

use App\Models\movies;
use Illuminate\Http\Request;

class Actors extends Controller
{
      public function index(){              
        return view('movies.index',[
            'movies'=> movies::latest()->filter(
                        request(['search'])
                    )->get()
            ]);
        }
    
}