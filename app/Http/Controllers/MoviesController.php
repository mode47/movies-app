<?php


namespace App\Http\Controllers;

use App\Http\Controllers\MovieShowInterface;


class MoviesController extends Controller
{
    protected $movieDB;

    public function __construct(movieShowInterface $movieDB)
    {
        $this->movieDB = $movieDB;
    }

    public function index()
    {
        return view('movies.index', [
            'populermovies' => $this->movieDB->getPopularMovies(),
            'genres' => $this->movieDB->getGenres(),
            'nowplaying' => $this->movieDB->getNowPlaying(),
            'type' => 'movie'
        ]);
    }

    public function show($id)
    {
        $movie = $this->movieDB->getMovie($id);
        return view('movies.show', [
            'movie' => $movie,
        ]);
    }
}