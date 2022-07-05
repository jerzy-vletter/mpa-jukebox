<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaylistSong extends Model
{
    protected $table = 'playlist_song';

    public function playlist(){
        return $this->belongsToMany(playlist::class, song::class);
    }
}

?>
