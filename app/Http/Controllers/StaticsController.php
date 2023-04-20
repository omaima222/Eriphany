<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Question;
use App\Models\Genre;
use App\Models\User;
use App\Models\Feedback;

class StaticsController extends Controller
{
    public function index(){
         
        $genres_count = Genre::count();
        $questions_count = Question::count();
        $users_count = User::count();
        $feedbacks_count = Feedback::count();

        return view('room.dashboard.statics', compact('genres_count', 'questions_count','users_count','feedbacks_count'));
    }
}
