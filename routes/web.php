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
    return view('home.index');
})->name('home.index');

Route::get('/comics', function () {
    $comics_database = config('db-comics');
    $data = [];
    foreach ($comics_database as $index => $comic) {
        $comic['id'] = $index;
        $data[] = $comic;
    }
    return view('comics.index', [
        'comics' => $comics_database
    ]);
})->name("comics.index");

Route::get('/comics/{id?}', function ($id) {
    $data = config('db-comics');
    if ($id >= 0 && $id < count($data)) {
        $comic = $data[$id];
        return view('comics.details', [
            'comic' => $comic
        ]);
    } else {
        abort('404');
    }
})->name('comics.details');
