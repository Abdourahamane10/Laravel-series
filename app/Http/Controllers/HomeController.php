<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    function index()
    {

        //$series = \App\Models\User::find(1)->series; //get series from user id 1

        $series = \App\Models\Serie::orderBy('created_at', 'DESC')->limit(3)->get(); //get all series



        return view('welcome', array(
            'series' => $series
        ));
    }
}
