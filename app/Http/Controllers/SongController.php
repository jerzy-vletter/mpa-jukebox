<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Song;

class SongController extends Controller
{
    // this function displays the songs on the genre pages.
    public function getSongs($page){
        switch ($page){
            case 'lofi':
                $songs = Song::where('genre_id', '1')->get();
                return view('songs', ['songs'=>$songs]);
            break;
            case 'metal':
                $songs = Song::where('genre_id', '2')->get();
                return view('songs', ['songs'=>$songs]);
            break;
            case 'pop':
                $songs = Song::where('genre_id', '3')->get();
                return view('songs', ['songs'=>$songs]);
            break;
            case 'edm':
                $songs = Song::where('genre_id', '4')->get();
                return view('songs', ['songs'=>$songs]);
            break;
            case 'rap':
                $songs = Song::where('genre_id', '5')->get();
                return view('songs', ['songs'=>$songs]);
            break;
            default:
                return view('genre');
            break;
        }
     }

     // this song displays the song details ones a song is selected from the genre page.
     public function displaySongDetails($page){
        $songData = Song::where('id', $page)->get();
        return view('songDetails',['songData'=>$songData]);
     }
}
