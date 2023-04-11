<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\Question;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            ['question'=>'What are you usually looking for when listening to music ?'],
            ['question'=> 'What instruments you like the most ?'],
            ['question'=> 'What does your favourite song make you feel like ?'],
            ['question'=> 'How long do you like your songs to be ?'],
            ['question'=> 'What is the importance of lyrics for you ?'],
            ['question'=> 'How creative do you consider yourself to be ?'],
            ['question'=> 'With whom you enjoy listening to music with ?'],
            ['question'=> 'Are you on social media more often ?'],
            ['question'=> 'How fast do you like your song to be ?'],
            ['question'=> 'What makes a good song for you ?'],
            ['question'=> 'From these sounds wich one would make a song magnificent for you  ?'],
            ['question'=> 'If you could only listen to one song for the rest of your life which one would you choose ?'],
            ['question'=> 'Wich of these songs sounds the most nostalgic to you ?'],
            ['question'=> 'What does a day without music mean to you ?'],
            ['question'=> 'if you could introduce someone to one of your favourite songs wich one would you choose ?'],
            ['question'=> 'what is the relation between music and reality for you ?'],
            ['question'=> 'What is music to you ?'],
            ['question'=> 'What is the most extreme emotion music made you feel ?'],
            ['question'=> 'What type of song writing do you prefer ?'],
            ['question'=> 'What tone do you prefer the vocals to be in ?'],
            ];
        foreach ($data as $question){
            Question::create([
                'question' => $question['question']
            ]);
        }
    }
}
