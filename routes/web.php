<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\StaticsController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\FeedbackController;

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

Route::get('/quiz', function(){
     return view('quiz');
})->middleware('auth');


Route::get('/getQuestions', [QuestionController::class, 'getData'])->name('getQuestions');
Route::get('/getGenres', [GenreController::class, 'getData'])->name('getGenres');
Route::get('/getRecommendations', [RecommendationController::class, 'getData'])->name('getRecommendations');



Route::resource('/genre', GenreController::class);
Route::resource('/question', QuestionController::class);
Route::resource('/recommendation', RecommendationController::class);
Route::resource('/feedback', FeedbackController::class);
Route::get('/statics', [StaticsController::class, 'index']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

