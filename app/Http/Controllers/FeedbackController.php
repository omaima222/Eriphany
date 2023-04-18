<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedbacks = Feedback::with('user')->get();
        return view('dashboard.feedbacks', compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $feedback = Feedback::create([
            'user_id' => Auth()->user()->id,
            'note' => $request->note,
            'ranking' => $request->ranking,
            'song' => $request->song,
            'artist' => $request->artist,
        ]);

        foreach($request->recommendations as $reco){
            $feedback->recommendations()->attach($reco);
        }
        
        return    $request->recommendations;
    }
  /**
     * Display the specified resource.
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feedback $feedback)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
        return "sucssesfulidelitid";
    }
}
