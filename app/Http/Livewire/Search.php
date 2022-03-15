<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Search extends Component
{

    public String $query = ''; //= 'aze';
    public $series = [];

    public function updatedQuery()
    {
        $words = '%' . $this->query . '%';

        if (strlen($this->query) > 2) {
            $this->series = \App\Models\Serie::where('title', 'like', $words)->get();
            //->orWhere('content', 'like', $words)
        }

        //return view('livewire/foundedSerie');
    }

    public function render()
    {
        return view('livewire.search');
    }
}
