<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Serie;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Cache\RateLimiting\Limit;

class SeriesController extends Controller
{
    //
    function index()
    {
        //$serie = \App\Models\Serie::find(1); //trouver la série avec l’id 1
        //echo $serie->author->name; //affiche le nom de l’auteur


        $series = \App\Models\Serie::all(); //get all series

        $comments = \App\Models\Comment::all(); //get all comments

        return view('series', ['series' => $series, 'comments' => $comments]);
    }

    public function show($id)
    {
        $serie = \App\Models\Serie::where('id', $id)->first(); //get first serie with id == $id
        return view('series/single', array( //Pass the serie to the view
            'serie' => $serie
        ));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required',

        ]);

        $comment = new Comment;
        $comment->author_id = User::inRandomOrder()->first()->id;
        $comment->serie_id = Serie::inRandomOrder()->first()->id;
        $comment->content = $request->content;
        $comment->date = now();
        $comment->save();
        return redirect('/series')->with('status', 'Données enregistrées');
    }
}
