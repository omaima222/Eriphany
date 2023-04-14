<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
  
    public function index()
    {
        $questions = Question::with(['option1.genres','option2.genres','option3.genres','option4.genres'])->get();
        return response()->json(['questions'=>$questions]);
    }


    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function show(Question $question)
    {
        //
    }

  
    public function edit(Question $question)
    {
        //
    }

  
    public function update(Request $request, Question $question)
    {
        //
    }


    public function destroy(Question $question)
    {
        //
    }
}
