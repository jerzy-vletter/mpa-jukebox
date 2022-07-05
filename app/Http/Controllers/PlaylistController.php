<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\PlaylistSong;
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
        ]);
        return redirect('');
    }
    /**
     * time calculation for the total time of a playlist
     *
     * @return \Illuminate\Http\Response
     */
    public function timecalculation($details){
        $time = 0;
        foreach($details as $index){
            foreach($index->songs as $song){
                $time = $time + $song->song_duration;
            }
        }
        return $time;
    }

    /**
     * shows the contents of the selected playlist
     *
     * @return \Illuminate\Http\Response
     */
    public function details($page)
    {
        /*$details = [];
        $pldata = playlistsong::where('playlist_id', $page)->get();

        foreach($pldata as $index){
            array_push($details, song::where('id', $index->song_id)->get());
        }*/

        $details = Playlist::where('id', $page)->get();

        $time = $this->timecalculation($details);
        return view('playlistDetails', ['details'=>$details, 'time'=>$time]);
    }

    /**
     * pulls all the playlists from the db so the user can add a song to one of them
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function playlists($page)
    {
        if(isset(auth()->user()->id)){
            $playlists = Playlist::where('user_id', auth()->user()->id)->get();
        }
        return view('PlaylistSelect', ['playlists'=>$playlists, 'song_id' => $page]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($song, $playlist)
    {

        DB::table('playlist_song')->insert(['song_id'=>$song, 'playlist_id' =>$playlist]);
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

    public function updateForm($page)
    {
        $plname = Playlist::where('id', $page)->get();
        return view('updateForm', ['plname'=>$plname]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update($page)
    {
        $plName = $_GET['plName'];
        DB::table('playlists')->where('id', $page)->update(['name'=>$plName]);
        return redirect('/');
    }

    public function deleteFromPlaylist($song)
    {
        DB::table('playlist_song')->where('song_id', $song)->take(1)->delete();
        return redirect('/');
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
