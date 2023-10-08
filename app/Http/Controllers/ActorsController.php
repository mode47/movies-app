<?php

namespace App\Http\Controllers;

use App\ViewModels\ActorsViewModel;
use App\ViewModels\ActorViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class ActorsController extends Controller
{

    public function index($page=1){
        $popularActors= Http::withToken(config('services.TOKEN_Key.api'))
        ->get('https://api.themoviedb.org/3/person/popular?page='.$page)
        ->json()['results'];
        abort_if($page > 500, 204);
        $actor=new ActorsViewModel($popularActors,$page);
        return view('actors.index',[
       'TrendingActors'=> $actor->popularActors(),
       'previous'=>$actor->previous(),
       'next'=>$actor->next()
       ]
        );
    }
    public function show($id){
        $actor = Http::withToken(config('services.TOKEN_Key.api'))->
        get('https://api.themoviedb.org/3/person/'.$id)->json();

// dd($actor);
        $credits = Http::withToken(config('services.TOKEN_Key.api'))
        ->get('https://api.themoviedb.org/3/person/'.$id.'/combined_credits')
        ->json();

        $knownForMovies =null;
        $viewModel = new ActorViewModel($actor, $credits);
        $viewModel->knownForMovies();

    return view('actors.show',[
        'actor'=>$viewModel->actor(),
        'knownForMovies'=>$viewModel->knownForMovies(),
    ]);


    }

}