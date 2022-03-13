<?php

namespace App\Http\Controllers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    //
    function index()
    {
        //$serie = \App\Models\Serie::find(1); //trouver la série avec l’id 1
        //echo $serie->author->name; //affiche le nom de l’auteur


        $series = \App\Models\Serie::all(); //get all series

        return view('series', ['series' => $series]);
    }

    public function show($id)
    {
        $serie = \App\Models\Serie::where('id', $id)->first(); //get first serie with id == $id
        return view('series/single', array( //Pass the serie to the view
            'serie' => $serie
        ));
    }
}
