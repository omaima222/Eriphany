<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class genreOptionseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            ['option_id' => 1,  'genre_id' => [13, 9, 10]],

            ['option_id' => 2, 'genre_id' => [5, 15, 1]],

            ['option_id' => 3, 'genre_id' => [2, 3, 7,16,11,12,4]],

            ['option_id' => 4, 'genre_id' => [6, 8, 14, 17, 18, 19, 20]],

            ['option_id' => 5, 'genre_id' => [2,8,9,15,18,17]],

            ['option_id' => 6, 'genre_id' => [16,5, 20]],

            ['option_id' => 7, 'genre_id' => [1,4,19]],

            ['option_id' => 8, 'genre_id' => [3,4,10,6,7,11,12,13,14]],      

            ['option_id' => 9, 'genre_id' => [9, 1, 10, 13]],

            ['option_id' => 10, 'genre_id' => [5, 4, 16]],

            ['option_id' => 11, 'genre_id' => [12, 11, 15]],

            ['option_id' => 12, 'genre_id' => [18, 17, 19, 8, 2, 6, 14, 3, 7, 20]],

            ['option_id' => 13, 'genre_id' => [2, 3, 6, 7, 8, 10, 13, 14, 17, 18, 19]],

            ['option_id' => 14, 'genre_id' => [9, 11, 12, 15]],

            ['option_id' => 15, 'genre_id' => [1, 4, 20]],

            ['option_id' => 16, 'genre_id' => [5, 16]],

            ['option_id' => 17, 'genre_id' => [1,5,9,16,14,15,18,6]],

            ['option_id' => 18, 'genre_id' => [2,8,11,17,19,12,20]],

            ['option_id' => 19, 'genre_id' => [4,16,13]],

            ['option_id' => 20, 'genre_id' => [7,3]],

            ['option_id' => 21, 'genre_id' => [2,3,7,8,10,17,18,20]],

            ['option_id' => 22, 'genre_id' => [1,6,11,14,15,19]],
        
            ['option_id' => 23, 'genre_id' => [4,9,13,16]],
        
            ['option_id' => 24, 'genre_id' => [5,12]],
        
            ['option_id' => 25, 'genre_id' => [1,5,9,16,15]],
        
            ['option_id' => 26, 'genre_id' => [11,12,13,4]],
        
            ['option_id' => 27, 'genre_id' => [3,7,10,20,17]],
        
            ['option_id' => 28, 'genre_id' => [2,6,8,14,18,19]],
        
            ['option_id' => 29, 'genre_id' => [1,4,5,9,16]],
        
            ['option_id' => 30, 'genre_id' => [11,12,15,19,13,20]],
        
            ['option_id' => 31, 'genre_id' => [10,17,18,3]],
        
            ['option_id' => 32, 'genre_id' => [2,6,7,8,14]],
        
            ['option_id' => 33, 'genre_id' => [9,13,12]],
        
            ['option_id' => 34, 'genre_id' => [1,4,10,11]],
        
            ['option_id' => 35, 'genre_id' => [2,5,7,15,17,3,20,16]],
        
            ['option_id' => 36, 'genre_id' => [6,8,14,18,19]],
        
            ['option_id' => 37, 'genre_id' => [2,3,6,7,8,14,17,18,19,20]],
        
            ['option_id' => 38, 'genre_id' => [10,11,12]],
        
            ['option_id' => 39, 'genre_id' => [1,5,9,15]],
        
            ['option_id' => 40, 'genre_id' => [4,16,13]],
        
            ['option_id' => 41, 'genre_id' => []],
        
            ['option_id' => 42, 'genre_id' => []],
        
            ['option_id' => 43, 'genre_id' => []],
        
            ['option_id' => 44, 'genre_id' => []],
        
            ['option_id' => 45, 'genre_id' => []],
        
            ['option_id' => 46, 'genre_id' => []],
        
            ['option_id' => 47, 'genre_id' => []],
        
            ['option_id' => 48, 'genre_id' => []],
        
            ['option_id' => 49, 'genre_id' => []],
        
            ['option_id' => 50, 'genre_id' => []],
        
            ['option_id' => 51, 'genre_id' => []],
        
            ['option_id' => 52, 'genre_id' => []],
        
            ['option_id' => 53, 'genre_id' => []],
        
            ['option_id' => 54, 'genre_id' => []],
        
            ['option_id' => 55, 'genre_id' => []],
        
            ['option_id' => 56, 'genre_id' => []],
        
            ['option_id' => 57, 'genre_id' => []],
        
            ['option_id' => 58, 'genre_id' => []],
        
            ['option_id' => 59, 'genre_id' => []],
        
            ['option_id' => 60, 'genre_id' => []],
        
            ['option_id' => 61, 'genre_id' => []],
        
            ['option_id' => 62, 'genre_id' => []],
        
            ['option_id' => 63, 'genre_id' => []],
        
            ['option_id' => 64, 'genre_id' => []],
        
            ['option_id' => 65, 'genre_id' => []],
        
            ['option_id' => 66, 'genre_id' => []],

            ['option_id' => 67, 'genre_id' => []],

            ['option_id' => 68, 'genre_id' => []],

            ['option_id' => 69, 'genre_id' => []],

            ['option_id' => 70, 'genre_id' => []],

            ['option_id' => 71, 'genre_id' => []],

            ['option_id' => 72, 'genre_id' => []],

            ['option_id' => 73, 'genre_id' => []],

            ['option_id' => 74, 'genre_id' => []],

            ['option_id' => 75, 'genre_id' => []],

            ['option_id' => 76, 'genre_id' => []],

            ['option_id' => 77, 'genre_id' => []],

            ['option_id' => 78, 'genre_id' => []],

            ['option_id' => 79, 'genre_id' => []],

            ['option_id' => 80, 'genre_id' => []]
        ];

        foreach($data as $d){
           foreach($d['genre_id'] as $g){
              DB::table('genre_option')->insert([
                   'option_id' => $d['option_id'],
                   'genre_id' => $g,
              ]);
           }
        }
    }
}
