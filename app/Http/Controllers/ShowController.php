<?php

namespace App\Http\Controllers;

use App\Models\movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ShowController extends Controller
{
        private function getPoplarMovies(){
        return Http::withToken(config('services.TOKEN_Key.api'))->
         get('https://api.themoviedb.org/3/tv/popular')->json()['results'];
     }

     public function index(){
        return view('tvshows.index',[
            'popularTv'=>$this->getPoplarMovies(),
            ]);
        }

   public function show($id){
    $show=Http::withToken(config('services.TOKEN_Key.api'))->
    get('https://api.themoviedb.org/3/tv/'.$id.'?append_to_response=credits,videos,images')->json();

    dump($show);
    return view('tvshows.show',[
    'show'=>$show,

    ]);
   }
        }