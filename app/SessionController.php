<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Playlist;
use App\Models\PlaylistSong;

class SessionController
{
    public function pullAllData(Request $request)
    {
        $sessionData = $request->session()->get('playlist');
        if($sessionData != null){
            return view('recent', compact('sessionData'));
        }
        else{
            $sessionData = [];
            return view('recent', compact('sessionData'));
        }
    }

    public function createPlaylist(Request $request)
    {
        $recentPlName = $_GET['recentPlName'];

        $data = $this->pullAllData($request);
        if(isset(auth()->user()->id)){

            DB::table('playlists')->insert([
                'name' => $recentPlName,
                'user_id'=> auth()->user()->id
            ]);

            $newPl = Playlist::all()->last();
            $plsong = new PlaylistSong();

            foreach(session()->get('playlist') as $plitem){
                $plsong->insert([
                    'song_id'=> $plitem->id,
                    'playlist_id'=>$newPl->id
                ]);
            }
            return redirect('');
        }
        return back();
    }

    public function pushIntoSession($data)
    {
        session()->push('playlist', $data);
    }

    public function deleteObjectFromSession($data){
        session()->forget($data);
    }

    public function deleteAllFromSession(){
        session()->flush();
    }
}
