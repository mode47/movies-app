<?php
namespace App\Http\Controllers;
interface movieShowInterface
{
    public function getPopularMoviesOrShow();
    public function getGenres();
    public function getNowPlaying();
    public function topRated();
    public function getMovieOrShow($id);

}