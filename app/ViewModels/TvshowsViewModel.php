<?php

namespace App\ViewModels;

use Illuminate\Support\Carbon;
use Spatie\ViewModels\ViewModel;

class TvshowsViewModel extends ViewModel
{
   public  $popularTv;
   public $genres;
   public $nowPlaying;
   public $topRated;
    public function __construct($popularTv,$genres,$nowPlaying,$topRated)
    {
        $this->popularTv=$popularTv;
        $this->genres=$genres;
        $this->nowPlaying=$nowPlaying;
        $this->topRated=$topRated;
    }
    public function PopularMovies()
    {
        return $this->formatMovies($this->popularTv);
    }
    public function Genres()
    {
        return $this->genres;
    }

    public function NowPlaying()
    {
        return $this->formatMovies($this->nowPlaying);

    }
    public function topRated(){
        return $this->formatMovies($this->topRated);
    }

    private function formatMovies($shows)
    {
        return collect($shows)->map(function($show) {

            return collect($show)->merge([

                'poster_path' => 'https://image.tmdb.org/t/p/w500/'.$show['poster_path'],
                'vote_average' => $show['vote_average'] * 10 .'%',
                'first_air_date' => Carbon::parse($show['first_air_date'])->format('M d, Y'),

            ])->only([
                'poster_path', 'id', 'genre_ids', 'original_name', 'vote_average', 'overview', 'first_air_date', 'genres',
            ]);
        });
    }

}
