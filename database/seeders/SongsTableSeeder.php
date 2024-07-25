<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Song;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Song::create([
            'title' => 'Roman Picisan',
            'artist' => 'Dewa19',
            'album_art' => 'https://upload.wikimedia.org/wikipedia/id/b/b2/Dewa_-_Laskar_Cinta.jpg?20201213042616',
            'audio_url' => 'https://archive.org/download/Dewa19-TheGreatestHits/01%20Dewa%20Mukadimah%20Roman%20Picisan.mp3',
        ]);

        Song::create([
            'title' => 'Mistikus Cinta',
            'artist' => 'Dewa19',
            'album_art' => 'https://id.wikipedia.org/wiki/Master_Mister_Ahmad_Dhani_I#/media/Berkas:The_rock_master_mister_ahmad_dhani_1.jpg',
            'audio_url' => 'https://archive.org/download/Dewa19-TheGreatestHits/02%20Dewa%20Mistikus%20Cinta.mp3',
        ]);

        Song::create([
            'title' => 'Pupus',
            'artist' => 'Dewa19',
            'album_art' => 'https://id.wikipedia.org/wiki/Master_Mister_Ahmad_Dhani_I#/media/Berkas:The_rock_master_mister_ahmad_dhani_1.jpg',
            'audio_url' => 'https://archive.org/download/Dewa19-TheGreatestHits/03%20Dewa%20Pupus.mp3',
        ]);

        Song::create([
            'title' => 'Duo Sejoli',
            'artist' => 'Dewa19',
            'album_art' => 'https://id.wikipedia.org/wiki/Master_Mister_Ahmad_Dhani_I#/media/Berkas:The_rock_master_mister_ahmad_dhani_1.jpg',
            'audio_url' => 'https://archive.org/download/Dewa19-TheGreatestHits/05%20Dewa%20Dua%20Sejoli.mp3',
        ]);

        Song::create([
            'title' => 'Risalah Hati',
            'artist' => 'Dewa19',
            'album_art' => 'https://id.wikipedia.org/wiki/Master_Mister_Ahmad_Dhani_I#/media/Berkas:The_rock_master_mister_ahmad_dhani_1.jpg',
            'audio_url' => 'https://archive.org/download/Dewa19-TheGreatestHits/12%20Dewa%20Risalah%20Hati.mp3',
        ]);

        Song::create([
            'title' => 'Pangeran Cinta',
            'artist' => 'Dewa19',
            'album_art' => 'https://id.wikipedia.org/wiki/Master_Mister_Ahmad_Dhani_I#/media/Berkas:The_rock_master_mister_ahmad_dhani_1.jpg',
            'audio_url' => 'https://archive.org/download/Dewa19-TheGreatestHits/08%20Dewa%20Pangeran%20Cinta.mp3',
        ]);

    }   

}
