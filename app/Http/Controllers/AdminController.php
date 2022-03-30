<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = \App\Models\Serie::all(); //get all series

        return view('admin/admin', ['series' => $series]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('series/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'acteurs' => 'required',
            'url' => 'required|max:200',
            'status' => 'required|max:45',

        ]);

        $serie = new Serie;
        $serie->author_id = User::inRandomOrder()->first()->id;
        $serie->title = $request->title;
        $serie->content = $request->content;
        $serie->acteurs = $request->acteurs;
        $serie->url = $request->url;
        $serie->tags = $request->tags;
        $serie->date = now();
        $serie->status = $request->status;
        $serie->save();
        return redirect('admin/series')->with('status', 'Données enregistrées');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $serie = \App\Models\Serie::where('id', $id)->first();
        //$serie::where('id', $serie->id)->first(); //get first serie with id == $id
        return view('series/single', array( //Pass the serie to the view
            'serie' => $serie
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $serie = \App\Models\Serie::where('id', $id)->first();
        //$serie::where('id', $serie->id)->first();
        return view('series/edit', array('serie' => $serie));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'acteurs' => 'required',
            'url' => 'required|max:200',
            'status' => 'required|max:45',

        ]);

        $serie = \App\Models\Serie::find($id);
        $serie->title = $request->title;
        $serie->content = $request->content;
        $serie->acteurs = $request->acteurs;
        $serie->url = $request->url;
        $serie->tags = $request->tags;
        $serie->date = now();
        $serie->status = $request->status;
        $serie->update();
        return redirect('admin/series/' . $serie->id)->with('status', 'serie updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $serie = Serie::find($id);
        $serie->delete();
        return redirect('admin/series')->with('status', 'serie deleted successfully');
    }
}
