<?php

namespace App\Http\Controllers;

use App\Models\movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class movie extends Controller
{
    public function index(){
        $populermovies=Http::withToken(config('services.TOKEN_Key.api'))->
         get('https://api.themoviedb.org/3/movie/popular?language=en-US&page=1')->json()['results'];


         $genersArray=Http::withToken(config('services.TOKEN_Key.api'))->
         get('https://api.themoviedb.org/3/genre/movie/list?language=en')->json()['genres'];
         $genres=collect($genersArray)->mapWithKeys(function($genre){
            return [ $genre['id']=>$genre['name']];
         });

         $nowplaying=Http::withToken(config('services.TOKEN_Key.api'))->
         get('https://api.themoviedb.org/3/movie/now_playing?language=en-US&page=1')->json()['results'];
        return view('movies.index',[
            'populermovies'=>$populermovies,
            'genres'=>$genres,
            'nowplaying'=>$nowplaying
            ]);
        }

   public function show($id){
    $movie=Http::withToken(config('services.TOKEN_Key.api'))->
    get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=credits,videos,images')->json();

    dump($movie);
    return view('movies.show',[
    'movie'=>$movie,




    ]);
   }
}
