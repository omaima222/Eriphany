<?php

namespace App\Http\Controllers;

use App\Models\Recommendation;
use App\Models\Genre;
use Illuminate\Http\Request;

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
        return view('dashboard.recommendations', compact('recommendations', 'genres'));
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
    public function store(Request $request)
    {
   
        
        $recommendation = Recommendation::create([
            'song_name' => $request->song_name,
            'song' => $_FILES['song']['name'],
            'artist' => $request->artist,
            'genre_id' => $request->genre_id,
        ]);
        

        $file = 'audios/recommendations/'.$recommendation->genre->genre;
        if(!file_exists($file)){
            if(!mkdir($file, 0777, true)){ // Try creating directory with full permissions and recursive flag
                // Handle error if mkdir() fails
                echo "Failed to create directory: ".$file;
                exit();
            }
        }

        $target_file = $file.'/'.$_FILES['song']['name'];
        if(!file_exists($target_file)){
            if(is_uploaded_file($_FILES['song']['tmp_name'])){
                $mime = mime_content_type($_FILES['song']['tmp_name']);
                if($mime=='audio/mpeg'){
                     if($_FILES['song']['size'] <= 20971520){
                        move_uploaded_file($_FILES['song']['tmp_name'], $target_file);
                     }
                }
    
            }
        }
    

        return  "nice";
        
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
    public function update(Request $request, recommendation $recommendation)
    {
        if($request->song){
            
            $target_file = 'audios/'.$_FILES['song']['name'];
            if(!file_exists($target_file)){
                if(is_uploaded_file($_FILES['song']['tmp_name'])){
                    $mime = mime_content_type($_FILES['song']['tmp_name']);
                    if($mime=='audio/mpeg'){
                            if($_FILES['song']['size'] <= 20971520){
                                 move_uploaded_file($_FILES['song']['tmp_name'], $target_file );
                            }
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

        return 'suuuuuuuuuuuuuiiii';

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(recommendation $recommendation)
    {
        unlink('audios/'.$recommendation->song);
        $recommendation->delete();

        return 'successss';
    }
}
