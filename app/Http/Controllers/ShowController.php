<?php

namespace App\Http\Controllers;

use App\ViewModels\MovieViewModel;
use App\Http\Controllers\MovieShowInterface;
use App\ViewModels\TvshowsViewModel;
use Illuminate\Support\Facades\Http;

class ShowController extends Controller
{
    protected $showDB;

    public function __construct(movieShowInterface $showDB)
    {
        $this->showDB = $showDB;
    }

     public function index(){

      
        return view('tvshows.index',[
            'popularTv'=>$this->showDB->getPopularMoviesOrShow(),
            'topRated'=>$this->showDB->topRated(),
            'genres'=>$this->showDB->getGenres(),
            'trending'=>$this->showDB->getNowPlaying(),
            ]);
        }

   public function show($id){

    return view('tvshows.show',[
    'show'=>$this->showDB->getMovieOrshow($id),

    ]);
   }
   private function trending(){
    return Http::withToken(config('services.TOKEN_Key.api'))->
    get('https://api.themoviedb.org/3/trending/tv/day')->json()['results'];
   }
        }