<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SongController extends Controller
{
    public function getLofiSongs(){
        $songs = DB::table('songs')->where('genre_id', '1')->get();

        return view('genres.lofi', ['songs'=>$songs]);
    }

    public function getMetalSongs(){
        $songs = DB::table('songs')->where('genre_id', '2')->get();

        return view('genres.metal', ['songs'=>$songs]);
    }

}
