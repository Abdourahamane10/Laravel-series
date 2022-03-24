<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSeriesController extends Controller
{
    public function index()
    {
        return view('adminSeries');
    }
}
