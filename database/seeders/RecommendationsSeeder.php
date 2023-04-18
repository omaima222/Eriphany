<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recommendation;

class RecommendationsSeeder extends Seeder
{
    
    public function run(): void
    {
        $data =[
            [ 
                'song'=> "Camidoh - Sugarcane Remix .MP3",
                'song_name'=> "Sugarcane",
                'artist'=> "Camidoh",
                'genre_id'=>8,
            ],
            [ 
                'song'=> "Pheelz - Finesse.MP3",
                'song_name'=> "Finesse",
                'artist'=> "Pheelz",
                'genre_id'=>8,
            ],
            [ 
                'song'=> "The Buddaheads - Mountain Of Blues.MP3",
                'song_name'=> "Mountain Of Blues",
                'artist'=> "The Buddaheads",
                'genre_id'=>4,
            ],
            [ 
                'song'=> "Mike Griffin - The Blues Ain't Never Gonna Die.MP3",
                'song_name'=> "The Blues Ain't Never Gonna Die",
                'artist'=> "Mike Griffin",
                'genre_id'=>4,
            ],
            [ 
                'song'=> "2.MP3",
                'song_name'=> "just a test",
                'artist'=> "tester",
                'genre_id'=>16,
            ],
            [ 
                'song'=> "The Futures - Ain't No Time Fa Nothing.MP3",
                'song_name'=> "Ain't No Time Fa Nothing",
                'artist'=> "The Futures",
                'genre_id'=>6,
            ],
            [ 
                'song'=> "L'Impératrice LÀ-HAUT.MP3", 
                'song_name'=> "LÀ-HAUT",
                'artist'=> "L'Impératrice",
                'genre_id'=>6,
            ],
            [ 
                'song'=> "Swiss Portrait - Cassette - YouTube.MP3", 
                'song_name'=> "Cassette",
                'artist'=> "Swiss Portrait",
                'genre_id'=>13,
            ],
            [ 
                'song'=> "Ancient Pools - Forget.MP3", 
                'song_name'=> "Forget",
                'artist'=> "Ancient Pools",
                'genre_id'=>13,
            ],
            [ 
                'song'=> "All I Need.MP3", 
                'song_name'=> "All I Need",
                'artist'=> "Radiohead",
                'genre_id'=>11,
            ],
            [ 
                'song'=> "Frog.MP3", 
                'song_name'=> "Frog",
                'artist'=> "Alice in chains",
                'genre_id'=>11,
            ],
            [ 
                'song'=> "Moon Eclipsed The Sun.MP3", 
                'song_name'=> "Moon Eclipsed The Sun",
                'artist'=> "Evolfo",
                'genre_id'=>11,
            ],
            [ 
                'song'=> "Nujabes - Luv(sic) Part 5 feat.Shing02.MP3", 
                'song_name'=> "Luv(sic) Part 5",
                'artist'=> "Nujabes",
                'genre_id'=>3,
            ],
            [ 
                'song'=> "The Notorious B.I.G. - Hypnotize.MP3", 
                'song_name'=> "Hypnotize",
                'artist'=> "The Notorious B.I.G.",
                'genre_id'=>3,
            ],
            [ 
                'song'=> "New World Sound -Outta My Head.MP3", 
                'song_name'=> "Outta My Head",
                'artist'=> "New World Sound",
                'genre_id'=>18,
            ],
            [ 
                'song'=> "DubDogz & Bhaskar - Infinity.MP3", 
                'song_name'=> "Infinity",
                'artist'=> "DubDogz & Bhaskar",
                'genre_id'=>18,
            ],
            [ 
                'song'=> "Short Saxophone.MP3", 
                'song_name'=> "Short Saxophone",
                'artist'=> "idk :D",
                'genre_id'=>1,
            ],
            [ 
                'song'=> "Getaway arranged by Paul Murtha.MP3", 
                'song_name'=> "Getaway",
                'artist'=> "Paul Murtha",
                'genre_id'=>1,
            ],
            [ 
                'song'=> "GRUPO BARUC - apuesta.MP3", 
                'song_name'=> "Apuesta",
                'artist'=> "GRUPO BARUC",
                'genre_id'=>19,
            ],
            [ 
                'song'=> "Mermaid by Positively Dark.MP3", 
                'song_name'=> "Mermaid",
                'artist'=> "Positively Dark",
                'genre_id'=>9,
            ],
            [ 
                'song'=> "Iceland Remix - Positively dark.MP3", 
                'song_name'=> "Iceland Remix",
                'artist'=> "Positively dark",
                'genre_id'=>9,
            ],
            [ 
                'song'=> "Wilee - Night Drive.MP3", 
                'song_name'=> "Night Drive",
                'artist'=> "Wilee",
                'genre_id'=>14,
            ],
            [ 
                'song'=> "DVRST - YOUR NAME.MP3", 
                'song_name'=> "YOUR NAME",
                'artist'=> "DVRST",
                'genre_id'=>14,
            ],
            [ 
                'song'=> "The Bakery.MP3", 
                'song_name'=> "The Bakery",
                'artist'=> "Melannie Martinez",
                'genre_id'=>2,
            ],
            [ 
                'song'=> "Send My Love.MP3", 
                'song_name'=> "Send My Love",
                'artist'=> "Adele",
                'genre_id'=>2,
            ],
            [ 
                'song'=> "Send My Love.MP3", 
                'song_name'=> "Send My Love",
                'artist'=> "Adele",
                'genre_id'=>2,
            ],
            [ 
                'song'=> "You Never Let Go.MP3", 
                'song_name'=> "You Never Let Go",
                'artist'=> "Kainalu & Munya",
                'genre_id'=>12,
            ],
            [ 
                'song'=> "Whisper.MP3", 
                'song_name'=> "The post nobles",
                'artist'=> "Whisper",
                'genre_id'=>12,
            ],
            [ 
                'song'=> "Older Than I Am.MP3", 
                'song_name'=> "Older Than I Am",
                'artist'=> "Kainalu",
                'genre_id'=>12,
            ],
            [ 
                'song'=> "Cowboy Lightning.MP3", 
                'song_name'=> "Cowboy Lightning",
                'artist'=> "SpaceFace",
                'genre_id'=>12,
            ],
            [ 
                'song'=> "outta my mind.MP3", 
                'song_name'=> "outta my mind",
                'artist'=> "Monsune",
                'genre_id'=>7,
            ],
            [ 
                'song'=> "Her's - Harvey.MP3", 
                'song_name'=> "Harvey",
                'artist'=> "Her's",
                'genre_id'=>10,
            ],
            [ 
                'song'=> "don't think it over - hers.MP3", 
                'song_name'=> "don't think it over",
                'artist'=> "Her's",
                'genre_id'=>10,
            ],
            [ 
                'song'=> "BEACH HOUSE -Myth.MP3", 
                'song_name'=> "Myth",
                'artist'=> "BEACH HOUSE",
                'genre_id'=>10,
            ],
            [ 
                'song'=> "Voyage - Paradise.MP3", 
                'song_name'=> "Paradise",
                'artist'=> "Voyage",
                'genre_id'=>15,
            ],
            [ 
                'song'=> "Space Sailors - Test Pilot .MP3", 
                'song_name'=> "Test Pilot",
                'artist'=> "Space Sailors",
                'genre_id'=>15,
            ],
            [ 
                'song'=> "1.MP3", 
                'song_name'=> "test yuh",
                'artist'=> "tester",
                'genre_id'=>20,
            ],
            [ 
                'song'=> "TWRK - BaDINGA! .MP3", 
                'song_name'=> "BaDINGA!",
                'artist'=> "TWRK",
                'genre_id'=>17,
            ],
            [ 
                'song'=> "3.MP3", 
                'song_name'=> "testttttt",
                'artist'=> "tester",
                'genre_id'=>5,
            ],
        ];
         
        foreach($data as $d){
            Recommendation::create($d);
        }
        
    }
}
