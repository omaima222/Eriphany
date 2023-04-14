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
            ['question'=>'What are you usually looking for when listening to music ?',     
            'option1_id'=> 1,
            'option2_id'=> 2,
            'option3_id'=> 3,
            'option4_id'=> 4,
            ],
            ['question'=> 'What instruments you like the most ?',
            'option1_id'=> 5,
            'option2_id'=> 6,
            'option3_id'=> 7,
            'option4_id'=> 8,
             ],
            ['question'=> 'What does your favourite song make you feel like ?',
            'option1_id'=> 9,
            'option2_id'=> 10,
            'option3_id'=> 11,
            'option4_id'=> 12,
            ],
            ['question'=> 'How long do you like your songs to be ?',
            'option1_id'=> 13,
            'option2_id'=> 14,
            'option3_id'=> 15,
            'option4_id'=> 16
            ],
            ['question'=> 'What is the importance of lyrics for you ?',
            'option1_id'=> 17,
            'option2_id'=> 18,
            'option3_id'=> 19,
            'option4_id'=> 20
            ],
            ['question'=> 'How creative do you consider yourself to be ?',
            'option1_id'=> 21,
            'option2_id'=> 22,
            'option3_id'=> 23,
            'option4_id'=> 24
            ],
            ['question'=> 'With whom you enjoy listening to music with ?',
            'option1_id'=> 25,
            'option2_id'=> 26,
            'option3_id'=> 27,
            'option4_id'=> 28,
            ],
            ['question'=> 'Are you on social media more often ?',
            'option1_id'=> 29,
            'option2_id'=> 30,
            'option3_id'=> 31,
            'option4_id'=> 32,
             ],
            ['question'=> 'How fast do you like your song to be ?',
            'option1_id'=> 33,
            'option2_id'=> 34,
            'option3_id'=> 35,
            'option4_id'=> 36,
             ],
            ['question'=> 'What makes a good song for you ?',
            'option1_id'=> 37,
            'option2_id'=> 38,
            'option3_id'=> 39,
            'option4_id'=> 40
            ],
            ['question'=> 'From these sounds wich one would make a song magnificent for you  ?',
            'option1_id'=> 41,
            'option2_id'=> 42,
            'option3_id'=> 43,
            'option4_id'=> 44,
            ],
            ['question'=> 'If you could only listen to one song for the rest of your life which one would you choose ?',
            'option1_id'=> 45,
            'option2_id'=> 46,
            'option3_id'=> 47,
            'option4_id'=> 48,
            ],
            ['question'=> 'Wich of these songs sounds the most nostalgic to you ?',
            'option1_id'=> 49,
            'option2_id'=> 50,
            'option3_id'=> 51,
            'option4_id'=> 52,
            ],
            ['question'=> 'What does a day without music mean to you ?',
            'option1_id'=> 53,
            'option2_id'=> 54,
            'option3_id'=> 55,
            'option4_id'=> 56,
            ],
            ['question'=> 'if you could introduce someone to one of your favourite songs wich one would you choose ?',
            'option1_id'=> 57,
            'option2_id'=> 58,
            'option3_id'=> 59,
            'option4_id'=> 60, 
            ],
            ['question'=> 'what is the relation between music and reality for you ?',
            'option1_id'=> 61,
            'option2_id'=> 62,
            'option3_id'=> 63,
            'option4_id'=> 64,
            ],
            ['question'=> 'What is music to you ?',
            'option1_id'=> 65,
            'option2_id'=> 66,
            'option3_id'=> 67,
            'option4_id'=> 68,
            ],
            ['question'=> 'What is the most extreme emotion music made you feel ?',
            'option1_id'=> 69,
            'option2_id'=> 70,
            'option3_id'=> 71,
            'option4_id'=> 72,
            ],
            ['question'=> 'What type of song writing do you prefer ?',
            'option1_id'=> 73,
            'option2_id'=> 74,
            'option3_id'=> 75,
            'option4_id'=> 76,
            ],
            ['question'=> 'What tone do you prefer the vocals to be in ?',
            'option1_id'=> 77,
            'option2_id'=> 78,
            'option3_id'=> 79,
            'option4_id'=> 80,
            ],
        ];

            foreach ($data as $question){
              Question::create($question);
        }
    }
}
