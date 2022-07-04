<?php

namespace App\Models;

use GuzzleHttp\Psr7\AppendStream;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $table = 'Songs';

    public function playlist(){
        return $this->hasMany(playlist::class);
    }
}

