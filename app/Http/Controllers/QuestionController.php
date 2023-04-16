<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Genre;
use App\Models\Option;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
  
    public function getData(){
        $questions = Question::with(['option1.genres','option2.genres','option3.genres','option4.genres'])->get();
        return response()->json(['questions'=>$questions]);
    }



    public function index()
    {
        $questions = Question::with(['option1.genres','option2.genres','option3.genres','option4.genres'])->get();
        $genres = Genre::all();
        return view('dashboard.questions', compact('questions','genres'));
    }


    public function create()
    {
    }

   
    public function store(Request $request)
    {
        Option::create(['option'=>$request->option1]);
        Option::create(['option'=>$request->option2]);
        Option::create(['option'=>$request->option3]);
        Option::create(['option'=>$request->option4]);

        $option1 = Option::where('option','=', $request->option1)->first();
        $option2 = Option::where('option','=', $request->option2)->first();
        $option3 = Option::where('option','=', $request->option3)->first();
        $option4 = Option::where('option','=', $request->option4)->first();

        foreach($request->genre1 as $genre){
            $option1->genres()->attach($genre);
        }

        foreach($request->genre2 as $genre){
            $option2->genres()->attach($genre);
        }

        foreach($request->genre3 as $genre){
            $option3->genres()->attach($genre);
        }

        foreach($request->genre4 as $genre){
            $option4->genres()->attach($genre);
        }

        Question::create([
           'question'=> $request->question,
           'option1_id'=> $option1->id,
           'option2_id'=> $option2->id,
           'option3_id'=> $option3->id,
           'option4_id'=> $option4->id,
        ]);

        return "succesesees";
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

        
        $option1 = Option::where('id','=',  $question->option1_id)->first();
        $option2 = Option::where('id','=',  $question->option2_id)->first();
        $option3 = Option::where('id','=',  $question->option3_id)->first();
        $option4 = Option::where('id','=',  $question->option4_id)->first();

        $question->update(['question'=>$request->question]);
        $option1->update(['option'=>$request->option1]);
        $option2->update(['option'=>$request->option2]);
        $option3->update(['option'=>$request->option3]);
        $option4->update(['option'=>$request->option4]);


        if($request->genre1){
            foreach($request->genre1 as $genre){
                $option1->genres()->sync($genre);
            }
        }  

        if($request->genre2){
        foreach($request->genre2 as $genre){
            $option2->genres()->sync($genre);
        }
        }
        if($request->genre3){
        foreach($request->genre3 as $genre){
            $option3->genres()->sync($genre);
        }
        }

        if($request->genre4){       
        foreach($request->genre4 as $genre){
            $option4->genres()->sync($genre);
        }
        }


        return 'sucsessful update';

    }


    public function destroy(Question $question)
    {

        $option1 = Option::where('id','=', $question->option1_id)->first(); 
        $option2 = Option::where('id','=', $question->option2_id)->first(); 
        $option3 = Option::where('id','=', $question->option3_id)->first(); 
        $option4 = Option::where('id','=', $question->option4_id)->first(); 
        $option1->delete();
        $option2->delete();
        $option3->delete();
        $option4->delete();
        $question->delete();
        return 'sucsess';
    }
}
