<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DvdController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [DvdController::class, 'index']);
Route::get('/contact', [ContactController::class, 'showForm']);
Route::post('/contact', [ContactController::class, 'processForm']);