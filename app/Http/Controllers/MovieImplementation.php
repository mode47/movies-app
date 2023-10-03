<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\MovieShowInterface;

class MovieImplementation   implements movieShowInterface
{
    
    public function getPopularMovies()
    {
         return Http::withToken(config('services.TOKEN_Key.api'))->
        get('https://api.themoviedb.org/3/movie/popular?language=en-US&page=1')->json()['results'];
    }
    public function getGenres()
    {
        $genersArray=Http::withToken(config('services.TOKEN_Key.api'))->
        get('https://api.themoviedb.org/3/genre/movie/list?language=en')->json()['genres'];
         return collect($genersArray)->mapWithKeys(function($genre){
           return [ $genre['id']=>$genre['name']];
        });
    }

    public function getNowPlaying()
    {
       return Http::withToken(config('services.TOKEN_Key.api'))->
        get('https://api.themoviedb.org/3/movie/now_playing?language=en-US&page=1')->json()['results'];
    }

    public function getMovie($id)
    {
    return Http::withToken(config('services.TOKEN_Key.api'))->
    get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=credits,videos,images')->json();
    
    }
}