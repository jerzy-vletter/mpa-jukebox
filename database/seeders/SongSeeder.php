<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     *
     * song_duration is the total time of the song in seconds, this will be formatted on the genre page.
     */
    public function run()
    {
        DB::table('songs')->insert([

            [
            'name'=>'lofi rain',
            'genre_id'=>'1',
            'song_duration'=> '118',
            'artist'=>'a girl and a cat',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ],
        [
            'name'=>'eternal youth',
            'genre_id'=>'1',
            'song_duration'=>'205',
            'artist'=>'RÚDE',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ],
        [
            'name'=>'juniper',
            'genre_id'=>'1',
            'song_duration'=>'102',
            'artist'=>'Made in M',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ],
        [
            'name'=>'nightfall',
            'genre_id'=>'1',
            'song_duration'=>'171',
            'artist'=>'S N U G, Nuver',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ],
        [
            'name'=>'in the end',
            'genre_id'=>'1',
            'song_duration'=>'145',
            'artist'=>'Ky akasha',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ],
        [
            'name'=>'hail to the king',
            'genre_id'=>'2',
            'song_duration'=>'305',
            'artist'=>'Avenged Sevenfold',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ],
        [
            'name'=>'Battery',
            'genre_id'=>'2',
            'song_duration'=>'312',
            'artist'=>'Metallica',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ],
        [
            'name'=>'Empire(let them sing)',
            'genre_id'=>'2',
            'song_duration'=>'345',
            'artist'=>'Bring me the horizon',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ],
        [
            'name'=>'Walk',
            'genre_id'=>'2',
            'song_duration'=>'323',
            'artist'=>'pantera',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ],
        [
            'name'=>'War Pigs',
            'genre_id'=>'2',
            'song_duration'=>'474',
            'artist'=>'Black Sabbath',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ],
        [
            'name'=>'i want you',
            'genre_id'=>'3',
            'song_duration'=>'229',
            'artist'=>'la fuente',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ],
        [
            'name'=>'in the stars',
            'genre_id'=>'3',
            'song_duration'=>'226',
            'artist'=>'benson boone',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ],
        [
            'name'=>'belly dancer',
            'genre_id'=>'3',
            'song_duration'=>'151',
            'artist'=>'imanbek, BYOR',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ],
        [
            'name'=>'bam bam',
            'genre_id'=>'3',
            'song_duration'=>'216',
            'artist'=>'camila cabello, ed sheeran',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ],
        [
            'name'=>'boot',
            'genre_id'=>'3',
            'song_duration'=>'142',
            'artist'=>'fmg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ],
        [
            'name'=>'edm',
            'genre_id'=>'4',
            'song_duration'=>'44',
            'artist'=>'davy m',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ],
        [
            'name'=>'wake me up',
            'genre_id'=>'4',
            'song_duration'=>'247',
            'artist'=>'avicii',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ],
        [
            'name'=>"edm o'clock",
            'genre_id'=>'4',
            'song_duration'=>'148',
            'artist'=>'tv noise, dillon francis',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ],
        [
            'name'=>'alive',
            'genre_id'=>'4',
            'song_duration'=>'290',
            'artist'=>'krewella',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ],
        [
            'name'=>'sweet dreams',
            'genre_id'=>'4',
            'song_duration'=>'138',
            'artist'=>'alan walker, imanbek',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ],
        [
            'name'=>'still d.r.e',
            'genre_id'=>'5',
            'song_duration'=>'287',
            'artist'=>'dr. dre, snoop dog',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ],
        [
            'name'=>'rap god',
            'genre_id'=>'5',
            'song_duration'=>'363',
            'artist'=>'eminem',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ],
        [
            'name'=>'crazy rap',
            'genre_id'=>'5',
            'song_duration'=>'328',
            'artist'=>'afroman',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ],
        [
            'name'=>'in my head',
            'genre_id'=>'5',
            'song_duration'=>'135',
            'artist'=>'lil tjay',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ],
        [
            'name'=>'heatwave',
            'genre_id'=>'5',
            'song_duration'=>'175',
            'artist'=>'trabbey',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]
    ]);
    }
}
