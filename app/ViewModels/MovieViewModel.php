<?php

namespace App\ViewModels;

use Illuminate\Support\Carbon;
use Spatie\ViewModels\ViewModel;

class MovieViewModel extends ViewModel
{
   public  $popularMovies;
   public $genres;
   public $nowPlaying;
   public $topRated;
    public function __construct($popularMovies,$genres,$nowPlaying,$topRated)
    {
        $this->popularMovies=$popularMovies;
        $this->genres=$genres;
        $this->nowPlaying=$nowPlaying;
        $this->topRated=$topRated;
    }
    public function PopularMovies()
    {
        return $this->formatMovies($this->popularMovies);
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

    private function formatMovies($movies)
    {
        return collect($movies)->map(function($movie) {
            $genresFormatted = collect($movie['genre_ids'])->mapWithKeys(function($value) {
                return [$value => $this->genres()->get($value)];
            })->implode(', ');
          

            return collect($movie)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'],
                'vote_average' => $movie['vote_average'] * 10 .'%',
                'release_date' => Carbon::parse($movie['release_date'])->format('M d, Y'),
                'genres' => $genresFormatted,
            ])->only([
                'poster_path', 'id', 'genre_ids', 'title', 'vote_average', 'overview', 'release_date', 'genres',
            ]);
        });
    }

}