<?php

namespace App\Http\Controllers;

use App\Models\genre;
use App\Models\Genre as ModelsGenre;
use Illuminate\Http\Request;
use App\Http\Requests\GenreRequest;

class GenreController extends Controller
{
    
    public function getData(){
        $genres = Genre::all();

        return response()->json(['genres'=>$genres]);
    }


    public function index()
    {
        $genres = Genre::all();
        return view('room.dashboard.genres', compact('genres'));
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
    public function store(GenreRequest $request)
    {
        $file = 'audios/recommendations/'.$request->genre;
        if(!file_exists($file)){
            if(!mkdir($file, 0777, true)){
                echo "Failed to create directory: ".$file;
                exit();
            }
        }

        Genre::create(['genre'=>$request->genre]);
        return  redirect('genres');
    }

    /**
     * Display the specified resource.
     */
    public function show(genre $genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(genre $genre)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GenreRequest $request, genre $genre)
    {
        $old_file = 'audios/recommendations/'.$genre->genre;
        $new_file = 'audios/recommendations/'.$request->genre;
        if(!rename($old_file, $new_file)){
            echo "Failed to create directory: ".$new_file;
            exit();
        }
        
        $genre->update(['genre'=>$request->genre]);
        return  redirect('genres');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(genre $genre)
    {
        $dir = 'audios/recommendations/'.$genre->genre;

        $files = glob($dir . '/*'); // get all files in the directory
        foreach ($files as $file) {
                unlink($file);
        }
        rmdir($dir); // delete the directory

        $genre->delete();
        return  redirect('genres');
    }
}
