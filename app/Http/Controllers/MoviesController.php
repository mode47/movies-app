<?php


namespace App\Http\Controllers;

use App\Http\Controllers\MovieShowInterface;
use App\ViewModels\MovieViewModel;
use App\ViewModels\MovieShowViewModel;
class MoviesController extends Controller
{
    protected $movieDB;

    public function __construct(movieShowInterface $movieDB)
    {
        $this->movieDB = $movieDB;
    }

    public function index()
    {
        $viewModel = new MovieViewModel(
            $this->movieDB->getPopularMoviesOrShow(),
            $this->movieDB->getGenres(),
            $this->movieDB->getNowPlaying(),
            $this->movieDB->topRated(),
        );
        return view('movies.index',[
           'popularMovies'=> $viewModel->PopularMovies(),
           'genres' => $viewModel->Genres(),
           'nowPlaying'=>$viewModel->NowPlaying(),
           'topRated'=>$viewModel->topRated(),
        ]);

    }

    public function show($id)
    {
        $movieShow=new MovieShowViewModel(
            $this->movieDB->getMovieOrShow($id)
        );

        return view('movies.show', [
            'movie' => $movieShow->movie(),
        ]);
    }
}