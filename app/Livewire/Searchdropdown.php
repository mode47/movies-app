<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
class Searchdropdown extends Component
{
    public $search='';
    public function render()

    {

        $searchResults = [];
        if (strlen($this->search) >= 2) {
            $searchResults = Http::withToken(config('services.TOKEN_Key.api'))
                ->get( 'https://api.themoviedb.org/3/search/movie?query='.$this->search)
                ->json()['results'];
        }

        return view('livewire.searchdropdown',[
            'searchResults' => $searchResults,
        ]);
    }
}