<?php
namespace App\Http\Controllers;

use App\Http\Controllers\MovieShowInterface;
use Illuminate\Support\Facades\Http;

class ShowImplementation implements movieShowInterface{
    private $apiToken='services.TOKEN_Key.api';

    public function getPopularMoviesOrShow()
    {
        return Http::withToken(config($this->apiToken))->
        get('https://api.themoviedb.org/3/tv/popular')->json()['results'];
    }
    public function getGenres()
    {
        $genersArray=Http::withToken(config($this->apiToken))->
        get('https://api.themoviedb.org/3/genre/tv/list')->json()['genres'];
         return collect($genersArray)->mapWithKeys(function($genre){
           return [ $genre['id']=>$genre['name']];
        });
    }

    public function getNowPlaying()
    {
        return Http::withToken(config('services.TOKEN_Key.api'))->
        get('https://api.themoviedb.org/3/trending/tv/day')->json()['results'];
    }

    public function getMovieOrShow($id)
    {
        return Http::withToken(config($this->apiToken))->
        get('https://api.themoviedb.org/3/tv/'.$id.'?append_to_response=credits,videos,images')->json();

    }
    public function topRated()
    {
        return Http::withToken(config($this->apiToken))->
        get('https://api.themoviedb.org/3/tv/top_rated')->json()['results'];

    }

}