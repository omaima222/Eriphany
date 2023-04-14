<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['genre' => 'jazz'],
            ['genre' => 'pop'],
            ['genre' => 'hiphop'],
            ['genre' => 'blues'],
            ['genre' => 'western classical music'],
            ['genre' => 'disco'],
            ['genre' => 'R&B'],
            ['genre' => 'afrobeats'],
            ['genre' => 'new-age'],
            ['genre' => 'soft rock'],
            ['genre' => 'grunge/Alternative rock'],
            ['genre' => 'psychedilic rock'],
            ['genre' => 'dream pop'],
            ['genre' => 'phonk'],
            ['genre' => 'synthwave'],
            ['genre' => 'classical arabic music'],
            ['genre' => 'trap'],
            ['genre' => 'house'],
            ['genre' => 'latin'],
            ['genre' => 'traditional arabic music'],
        ];
        
        foreach($data as $genre){
            Genre::create($genre);
        }
    }
}
