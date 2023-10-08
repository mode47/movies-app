<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\MovieShowInterface;

class MovieImplementation   implements movieShowInterface
{

    private $apiToken='services.TOKEN_Key.api';

    public function getPopularMoviesOrShow()
    {
         return Http::withToken(config($this->apiToken))->
        get('https://api.themoviedb.org/3/movie/popular')->json()['results'];
    }
    public function getGenres()
    {
        $genersArray=Http::withToken(config($this->apiToken))->
        get('https://api.themoviedb.org/3/genre/movie/list')->json()['genres'];
         return collect($genersArray)->mapWithKeys(function($genre){
           return [ $genre['id']=>$genre['name']];
        });
    }

    public function getNowPlaying()
    {
       return Http::withToken(config($this->apiToken))->
        get('https://api.themoviedb.org/3/movie/now_playing')->json()['results'];
    }

    public function getMovieOrShow($id)
    {
    return Http::withToken(config($this->apiToken))->
    get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=credits,videos,images')->json();

    }
    public function topRated()
{
    return Http::withToken(config($this->apiToken))->
    get('https://api.themoviedb.org/3/movie/top_rated')->json()['results'];

}}