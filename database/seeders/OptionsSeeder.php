<?php

namespace Database\Seeders;
use App\Models\Option;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
             [
                'option1'=> 'Relaxation',
                'option2'=> 'Focus',
                'option3'=> 'Mood Enhancement',
                'option4'=> 'Energy',
                'question_id'=> '1',
             ],
             [
                'option1'=> 'Kyboards and pianos',
                'option2'=> 'Strings and orchestral instruments',
                'option3'=> 'wind instruments',
                'option4'=> 'guitars and basses',
                'question_id'=> '2',
             ],
             [
                'option1'=> 'Peace',
                'option2'=> 'Appreciation',
                'option3'=> 'Out of body experience',
                'option4'=> 'Enthusiasm',
                'question_id'=> '3',
             ],
             [
                'option1'=> '1-5 min',
                'option2'=> '6-10 min',
                'option3'=> '10-30 min',
                'option4'=> 'hour +',
                'question_id'=> '4',
             ],
             [
                'option1'=> 'I prefer my songs to have very little to no lyrics , it’s all about the music',
                'option2'=> 'As long as the melody is great enough i won’t care much about the lyrics',
                'option3'=> 'I prefer songs that put more thoughts into lyrics than instrumental',
                'option4'=> 'If the Lyrics and vocals  are great it’s a great song already',
                'question_id'=> '5',
             ],
             [
                'option1'=> 'i usually don’t find myself with a different taste in art than most people',
                'option2'=> 'i enjoy and respect art but i don’t really put that much thoughts into it',
                'option3'=> 'I consider myself to be a creative person who enjoys trying new forms of art',
                'option4'=> 'i am something of a musician myself',
                'question_id'=> '6',
             ],
             [
                'option1'=> 'With my headphones',
                'option2'=> 'someone i know would understand it like i do',
                'option3'=> 'With friends  sometimes and i like to play it throughout the house when i can',
                'option4'=> 'i blast my music whenever i have the chance to >:)',
                'question_id'=> '7',
             ],
             [
                'option1'=> 'I watch some content but i don’t keep up with most music trends',
                'option2'=> 'Yes but it’s a bit rare that i find music i like in my feeds',
                'option3'=> 'Yes and i often discover some great music while scrolling',
                'option4'=> ' actually got more into music because of my social media presence and i slowly built my music taste from there',
                'question_id'=> '8',
             ],
             [
                'option1'=> 'slow',
                'option2'=> 'moderatly slow',
                'option3'=> 'moderate',
                'option4'=> 'fast',
                'question_id'=> '9',
             ],
             [
                'option1'=> 'the catchy rythms',
                'option2'=> 'the astronomical lyrics',
                'option3'=> 'the hypnotizing melodies',
                'option4'=> 'It speaks to my soul',
                'question_id'=> '10',
             ],
             [
                'option1'=> '*insert drum beats w sum catchy* ',
                'option2'=> '*insert saxofone with slow drums and some strings maybe* ',
                'option3'=> '*insert synth with some goofy keybord notes * ',
                'option4'=> '*insert guitar solo*',
                'question_id'=> '11',
             ],
             [
                'option1'=> 'i would rather not to listen to any music at all, i don’t want to hate one my fav songs by constantly  repeating it',
                'option2'=> 'a song that holds a certain memory ',
                'option3'=> 'a good song with lyrics that gets me through life ',
                'option4'=> 'A song that can dissociate me from reality',
                'question_id'=> '12',
             ],
             [
                'option1'=> '*insert old pop/rock  song* ',
                'option2'=> '*insert an electric video games theme* ',
                'option3'=> '*insert something orchestral*',
                'option4'=> '*insert upbeat song*',
                'question_id'=> '13',
             ],
             [
                'option1'=> 'Nothig really i can go for days without listeneing to music',
                'option2'=> 'I don’t usually include music in my daily activities so it won’t make a big diffrence for me',
                'option3'=> 'it would feel a bit weird doing some things without music in the background but if it’s only a day i can make it',
                'option4'=> 'I simply cannot',
                'question_id'=> '14',
             ],
             [
                'option1'=> 'The one that most people would like',
                'option2'=> 'The one with the most powerful lyrics and vocals',
                'option3'=> 'The one with the  most Mesmerizing melodies',
                'option4'=> 'The most complex one that needs multiple listenings to truly be appreciated',
                'question_id'=> '15',
             ],
             [
                'option1'=> 'I don’t know i’ve never thought about it',
                'option2'=> 'music enhances reality',
                'option3'=> 'music translates what reality cannot represent ',
                'option4'=> 'an escape from reality ',
                'question_id'=> '16',
             ],
             [
                'option1'=> 'It’s just something i enjoy from time to time',
                'option2'=> 'It’s an art that I respect and admire its complexity and ability to evoke emotions',
                'option3'=> 'It’s like a time capsule for me , something that does and will hold so many of my memories.',
                'option4'=> 'It’s an essential part of my life and who I am.',
                'question_id'=> '17',
             ],
             [
                'option1'=> 'Ecstasy ',
                'option2'=> 'Homesickness ',
                'option3'=> 'Melancholy ',
                'option4'=> 'Transcendence ',
                'question_id'=> '18',
             ],
             [
                'option1'=> 'i already said that i prefer my songs with no lyrics ',
                'option2'=> 'Narrative / Descriptive',
                'option3'=> 'confessional',
                'option4'=> 'Lyricism',
                'question_id'=> '19',
             ],
             [
                'option1'=> 'i said no vocals damn >:0',
                'option2'=> 'sharp and clear',
                'option3'=> 'breathy and soft',
                'option4'=> 'rough and gritty',
                'question_id'=> '20',
             ],
        ];

        foreach ($data as $options){
            Option::create($options);
        }
    }
}
