<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Song;
use App\SessionController;

class SongController extends Controller
{
    // this function displays the songs on the genre pages.
    public function getSongs($page){
        $songs = Song::whereIn('genre_id', [$page])->get();
        return view('songs',['songs'=>$songs]);

     }

     // this song displays the song details ones a song is selected from the genre page.
     public function displaySongDetails($page){
        $data = Song::find($page);
        //session()->push('playlist', $songData);
        SessionController::pushIntoSession($data);
        return view('songDetails',['songData'=>$data]);
     }
}
