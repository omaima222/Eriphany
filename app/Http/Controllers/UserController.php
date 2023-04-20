<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Feedback;

class UserController extends Controller
{
    public function deleteAccount(User $user){
          $user->delete();
          return redirect('/');
    }

    public function index(){
        $users = User::get();

        return view('room.dashboard.users', compact('users'));
    }

    public function MyFiles(){

          $feedbacks = Feedback::where('user_id','=', Auth()->user()->id)->get();

          foreach($feedbacks as $feedback){
             $feedback->recommendations();
          }

          return view('room.files.userFiles', compact('feedbacks'));
    }

    public function ThisUserFeedbacks(User $user){
        $feedbacks = Feedback::where('user_id','=',$user->id)->get();
        return view('room.dashboard.feedbacks', compact('feedbacks'));
    }

}
