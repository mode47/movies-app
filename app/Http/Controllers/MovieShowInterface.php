<?php
namespace App\Http\Controllers;
interface movieShowInterface
{
    public function getPopularMovies();
    public function getGenres();
    public function getNowPlaying();
    public function getMovie($id);
}