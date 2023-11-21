<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // SELECT * FROM dvd_titles
    $dvds = DB::table('dvd_titles')->get();

    return view('index', [
        'dvds' => $dvds,
    ]);
});


