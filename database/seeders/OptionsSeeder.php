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
                ['option'=> 'Relaxation'],
                ['option'=> 'Focus'],
                ['option'=> 'Mood Enhancement'],
                ['option'=> 'Energy'],

                ['option'=> 'Kyboards and pianos'],
                ['option'=> 'Strings and orchestral instruments'],
                ['option'=> 'wind instruments'],
                ['option'=> 'guitars and basses'],
 
                ['option'=> 'Peace'],
                ['option'=> 'Appreciation'],
                ['option'=> 'Out of body experience'],
                ['option'=> 'Enthusiasm'],

                ['option'=> '1-5 min'],
                ['option'=> '6-10 min'],
                ['option'=> '10-30 min'],
                ['option'=> 'hour +'],
           
                ['option'=> 'I prefer my songs to have very little to no lyrics , it’s all about the music'],
                ['option'=> 'As long as the melody is great enough i won’t care much about the lyrics'],
                ['option'=> 'I prefer songs that put more thoughts into lyrics than instrumental'],
                ['option'=> 'If the Lyrics and vocals  are great it’s a great song already'],

                ['option'=> 'i usually don’t find myself with a different taste in art than most people'],
                ['option'=> 'i enjoy and respect art but i don’t really put that much thoughts into it'],
                ['option'=> 'I consider myself to be a creative person who enjoys trying new forms of art'],
                ['option'=> 'i am something of a musician myself'],

                ['option'=> 'With my headphones'],
                ['option'=> 'someone i know would understand it like i do'],
                ['option'=> 'With friends  sometimes and i like to play it throughout the house when i can'],
                ['option'=> 'i blast my music whenever i have the chance to >:)'],
           
                ['option'=> 'I watch some content but i don’t keep up with most music trends'],
                ['option'=> 'Yes but it’s a bit rare that i find music i like in my feeds'],
                ['option'=> 'Yes and i often discover some great music while scrolling' ],
                ['option'=> ' actually got more into music because of my social media presence and i slowly built my music taste from there'],
      
                ['option'=> 'slow'],
                ['option'=> 'moderatly slow'],
                ['option'=> 'moderate'],
                ['option'=> 'fast'],
    
                ['option'=> 'the catchy rythms'],
                ['option'=> 'the astronomical lyrics'],
                ['option'=> 'the hypnotizing melodies'],
                ['option'=> 'It speaks to my soul'],
     
                ['option'=> '*insert drum beats w sum catchy*'],
                ['option'=> '*insert saxofone with slow drums and some strings maybe* '],
                ['option'=> '*insert synth with some goofy keybord notes * '],
                ['option'=> '*insert guitar solo*'],
     
                ['option'=> 'i would rather not to listen to any music at all, i don’t want to hate one my fav songs by constantly  repeating it'],
                ['option'=> 'a song that holds a certain memory '],
                ['option'=> 'a good song with lyrics that gets me through life '],
                ['option'=> 'A song that can dissociate me from reality'],
    
                ['option'=> '*insert old pop/rock  song* '],
                ['option'=> '*insert an electric video games theme* '],
                ['option'=> '*insert something orchestral*'],
                ['option'=> '*insert upbeat song*'],
  
                ['option'=> 'Nothig really i can go for days without listeneing to music'],
                ['option'=> 'I don’t usually include music in my daily activities so it won’t make a big diffrence for me'],
                ['option'=> 'it would feel a bit weird doing some things without music in the background but if it’s only a day i can make it'],
                ['option'=> 'I simply cannot'],
   
                ['option'=> 'The one that most people would like'],
                ['option'=> 'The one with the most powerful lyrics and vocals'],
                ['option'=> 'The one with the  most Mesmerizing melodies'],
                ['option'=> 'The most complex one that needs multiple listenings to truly be appreciated'],
        
                ['option'=> 'I don’t know i’ve never thought about it'],
                ['option'=> 'music enhances reality'],
                ['option'=> 'music translates what reality cannot represent '],
                ['option'=> 'an escape from reality '],
         
                ['option'=> 'It’s just something i enjoy from time to time'],
                ['option'=> 'It’s an art that I respect and admire its complexity and ability to evoke emotions'],
                ['option'=> 'It’s like a time capsule for me , something that does and will hold so many of my memories.'],
                ['option'=> 'It’s an essential part of my life and who I am.'],
        
                ['option'=> 'Ecstasy '],
                ['option'=> 'Homesickness '],
                ['option'=> 'Melancholy '],
                ['option'=> 'Transcendence '],
     
                ['option'=> 'i already said that i prefer my songs with no lyrics '],
                ['option'=> 'Narrative / Descriptive'],
                ['option'=> 'confessional'],
                ['option'=> 'Lyricism'],
       
                ['option'=> 'i said no vocals damn >:0'],
                ['option'=> 'sharp and clear'],
                ['option'=> 'breathy and soft'],
                ['option'=> 'rough and gritty'],
        ];

        foreach ($data as $options){
            Option::create($options);
        }
    }
}
