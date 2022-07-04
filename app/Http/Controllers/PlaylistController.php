<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('createPlayList');
    }

    public function display()
    {
        if(isset(auth()->user()->id)){
            $playlists = Playlist::where('user_id', auth()->user()->id)->get();
            return view('index', ['playlists'=>$playlists]);
        }
        else{
            $playlists = Playlist::all();
            return view('index', ['playlists'=>$playlists]);

        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plName = $_GET['plName'];
        DB::table('playlists')->insert([
            'name'=> $plName,
            'user_id'=> auth()->user()->id,
            'song_id'=> ''
        ]);
        return redirect('');
    }

    /**
     * shows the contents of the selected playlist
     *
     * @return \Illuminate\Http\Response
     */
    public function details($page)
    {
        $details = Playlist::where('id', $page)->get();
        return view('playlistDetails', ['details'=>$details]);
    }

    /**
     * pulls all the playlists from the db so the user can add a song to one of them
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function playlists($page)
    {
        $playlists = Playlist::get();
        return view('PlaylistSelect', ['playlists'=>$playlists]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($song)
    {
        DB::table('playlists')->update(['song_id'=>$song]);
        return redirect('');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Playlist $playlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Playlist $playlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function destroy($page)
    {
        Playlist::find($page)->delete();
        return redirect('');
    }
}
