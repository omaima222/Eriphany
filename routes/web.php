<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\StaticsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
     return view('welcome');
});


Route::get('/questions', [QuestionController::class, 'getData'])->name('questions');
Route::get('/genres', [GenreController::class, 'getData'])->name('genres');



Route::resource('/genre', GenreController::class);
Route::resource('/question', QuestionController::class);
Route::get('/statics', [StaticsController::class, 'index']);