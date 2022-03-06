<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    //
    function index()
    {
        //$serie = \App\Models\Serie::find(1); //trouver la série avec l’id 1
        //echo $serie->author->name; //affiche le nom de l’auteur


        return view('series');
    }
}
