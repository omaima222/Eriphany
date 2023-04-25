<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Recommendation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
          GenreSeeder::class,
        ]);
        $this->call([
          OptionsSeeder::class,
        ]);
        $this->call([
          genreOptionseeder::class,
        ]);
        $this->call([
          QuestionSeeder::class,
        ]);
        $this->call([
          RecommendationsSeeder::class,
        ]);
    }
}
