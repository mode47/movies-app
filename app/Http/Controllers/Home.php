<?php

namespace App\Http\Controllers;

use App\Models\movies;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index(){              
        return view('welcome',[
            'movies'=> movies::latest()->filter(
                        request(['search'])
                    )->get()
            ]);
        }
}