<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
//use App\Http\Controllers\AdminSeriesController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/series', [SeriesController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

Route::post('/contact', [ContactController::class, 'store']);

Route::post('/series', [SeriesController::class, 'store']);

Route::resource('admin/series', AdminController::class)->only('index');
Route::resource('admin/series', AdminController::class)->only('store');
Route::resource('admin/series', AdminController::class)->only('create');
Route::resource('admin/series', AdminController::class)->only('edit');
Route::resource('admin/series', AdminController::class)->only('update');
Route::resource('admin/series', AdminController::class)->only('show');
Route::resource('admin/series', AdminController::class)->only('destroy');



Route::get('/series/{id}', [SeriesController::class, 'show'])->name('series.show');
