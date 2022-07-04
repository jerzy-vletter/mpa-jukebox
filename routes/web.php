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

Route::get('/index', function (){
    return redirect('/');
});

Route::get('/', [App\Http\Controllers\PlaylistController::class, 'display']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/genre',[App\Http\Controllers\GenreController::class, 'index'])->name('genre');
Route::get('/recent', [App\SessionController::class, 'pullAllData'])->name('recent');


// get the songs from the database
Route::get('/songs/{page}', [App\Http\Controllers\SongController::class, 'getSongs'])->name('genreSelect');

// get the destination page based on the song id of the song gotten out of the db.

Route::get('/songDetails/{page}', [App\Http\Controllers\SongController::class, 'displaySongDetails'])->name('songSelect');

// routes to the crud portions of the playlist.

Route::get('/PlayListform', [App\Http\Controllers\PlaylistController::class, 'index'])->name('PlaylistForm');
Route::get('/createPlaylist', [App\Http\Controllers\PlaylistController::class, 'create'])->name('createPlaylist');
Route::get('/showPlaylist', [App\Http\Controllers\PlaylistController::class, 'display'])->name('showPlaylist');
Route::get('/deletePlaylist/{page}', [App\Http\Controllers\PlaylistController::class, 'destroy'])->name('deletePlaylist');
Route::get('/PlaylistDetails/{page}', [App\Http\Controllers\PlaylistController::class, 'details'])->name('PlaylistDetails');
Route::get('/PlaylistSelect/{page}', [App\Http\Controllers\PlaylistController::class, 'playlists'])->name('PlaylistSelect');
Route::get('/storeSong/{song}', [App\Http\Controllers\PlaylistController::class, 'store'])->name('storeSong');

