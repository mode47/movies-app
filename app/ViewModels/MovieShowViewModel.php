<?php

namespace App\ViewModels;

use Illuminate\Support\Carbon;
use Spatie\ViewModels\ViewModel;

class MovieShowViewModel extends ViewModel
{
    public $movie;
    public function __construct($movie)
    {
        $this->movie = $movie;

    }
    public function movie(){
        return collect($this->movie)->merge([
            'poster_path'=>$this->movie['poster_path']
            ?'https://image.tmdb.org/t/p/w500/'.$this->movie['poster_path']
            :'https://via.placeholder.com/500x750',
            'vote_average' => $this->movie['vote_average'] * 10 .'%',
            'release_date' => Carbon::parse($this->movie['release_date'])->format('M d, Y'),
            'genres' => collect($this->movie['genres'])->pluck('name')->flatten()->implode(', '),
            'crew' => collect($this->movie['credits']['crew'])->take(2),
            'images'=>collect($this->movie['images']['backdrops'])->take(7)->map(function ($image){
                return collect($image)->merge([
                   'file_path'=> $image['file_path']
                   ? 'https://image.tmdb.org/t/p/w500/'.$image['file_path']
                   : 'https://via.placeholder.com/404'
                ]);
            }),

            'cast' => collect($this->movie['credits']['cast'])->take(25)->map(function($cast) {
                return collect($cast)->merge([
                    'profile_path' => $cast['profile_path']
                        ? 'https://image.tmdb.org/t/p/w300'.$cast['profile_path']
                        : 'https://via.placeholder.com/404',
                ]);
            }),



        ]);


    }
}