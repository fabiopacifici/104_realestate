<?php

use App\Http\Controllers\Gusts\PagesController;
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

Route::get('/', [PagesController::class, 'index'])->name('home');

Route::get('/houses', [PagesController::class, 'houses'])->name('houses');


Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
