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

Route::get('/', function () {
    $comics_database = config('db-comics');
    // dump($comics_database);
    return view('home.index', ['lista_comics' => $comics_database]);
})->name('home.index');

Route::get('/comics', function () {
    return view('comics.index');
})->name("comics.index");
