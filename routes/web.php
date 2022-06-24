<?php

use App\Http\Controllers\GenreController;
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
    return view('index');
});

Route::get('/index', function (){
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/genre',[App\Http\Controllers\GenreController::class, 'index'])->name('genre');


// get the songs from the database
Route::get('/songs/{page}', [App\Http\Controllers\SongController::class, 'getSongs'])->name('genreSelect');

// get the destination page based on the song id of the song gotten out of the db.

Route::get('/songDetails/{page}', [\App\Http\Controllers\SongController::class, 'displaySongDetails'])->name('songSelect');


