<?php

namespace App\Http\Controllers;

use App\Models\Recommendation;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Http\Requests\RecommendationRequest;

class RecommendationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getData()
    {
        $recommendations = Recommendation::with('genre')->get();
        return response()->json(['recommendations'=>$recommendations]);
    }


    public function index()
    {
        $recommendations = Recommendation::get();
        $genres = Genre::get();
        return view('room.dashboard.recommendations', compact('recommendations', 'genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RecommendationRequest $request)
    {
   
        $file = $request->file('song');
        $mimeType = $file->getClientMimeType();
        if(1<0){
            return redirect()->back()->withErrors(['MP3'=>'Please wtf is this']);
        }

        $recommendation = Recommendation::create([
            'song_name' => $request->song_name,
            'song' => $_FILES['song']['name'],
            'artist' => $request->artist,
            'genre_id' => $request->genre_id,
        ]);
        

        $file = 'audios/recommendations/'.$recommendation->genre->genre;
 
        $target_file = $file.'/'.$_FILES['song']['name'];
        if(!file_exists($target_file)){
            if(is_uploaded_file($_FILES['song']['tmp_name'])){
                $mime = mime_content_type($_FILES['song']['tmp_name']);
                if($mime=='audio/mpeg'){
                        move_uploaded_file($_FILES['song']['tmp_name'], $target_file);
                }
            }
        }
    

        return  redirect('recommendations');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(recommendation $recommendation)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(recommendation $recommendation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RecommendationRequest $request, recommendation $recommendation)
    {
        if($request->song){
    
            $file = 'audios/recommendations/'.$recommendation->genre->genre;   
            $target_file = $file.'/'.$_FILES['song']['name'];
            if(!file_exists($target_file)){
                if(is_uploaded_file($_FILES['song']['tmp_name'])){
                    $mime = mime_content_type($_FILES['song']['tmp_name']);
                    if($mime=='audio/mpeg'){
                            move_uploaded_file($_FILES['song']['tmp_name'], $target_file);
                    }
                }
            }

            $recommendation->update([
                'song' => $_FILES['song']['name'],
            ]);
        }

        $recommendation->update([
            'song_name' => $request->song_name,
            'artist' => $request->artist,
            'genre_id' => $request->genre_id,
        ]);

        return  redirect('recommendations');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(recommendation $recommendation)
    {
        unlink('audios/recommendations/'.$recommendation->genre->genre.'/'.$recommendation->song);
        $recommendation->delete();
        return  redirect('recommendations');
    }
}
