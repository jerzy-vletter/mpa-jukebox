<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SongController extends Controller
{
    public function getSongs($page){
        if($page == 'lofi'){
            $songs = DB::table('songs')->where('genre_id', '1')->get();
            return view('genres/'.$page, ['songs'=>$songs]);
        }
        elseif($page == 'metal'){
            $songs = DB::table('songs')->where('genre_id', '2')->get();
            return view('genres/'.$page, ['songs'=>$songs]);
        }
        elseif($page == 'pop'){
            $songs = DB::table('songs')->where('genre_id', '3')->get();
            return view('genres/'.$page, ['songs'=>$songs]);
        }
        elseif($page == 'edm'){
            $songs = DB::table('songs')->where('genre_id', '4')->get();
            return view('genres/'.$page, ['songs'=>$songs]);
        }
        elseif($page == 'rap'){
            $songs = DB::table('songs')->where('genre_id', '5')->get();
            return view('genres/'.$page, ['songs'=>$songs]);
        }
     }
}
