<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Question;
use App\Models\Genre;

class StaticsController extends Controller
{
    public function index(){
         
        $genres_count = Genre::count();
        $questions_count = Question::count();

        return view('dashboard.statics', compact('genres_count', 'questions_count'));
    }
}
