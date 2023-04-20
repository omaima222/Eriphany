<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\StaticsController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\UserController;

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
     return view('home');
})->name('home');

Route::get('/AboutUs', function(){
     return view('aboutUs');
})->name('AboutUs');



// For Getting data with ajax
Route::get('/getQuestions', [QuestionController::class, 'getData'])->name('getQuestions');
Route::get('/getGenres', [GenreController::class, 'getData'])->name('getGenres');
Route::get('/getRecommendations', [RecommendationController::class, 'getData'])->name('getRecommendations');


// Dashboard 
Route::resource('/genres', GenreController::class)->middleware(['auth','admin']);
Route::resource('/questions', QuestionController::class)->middleware(['auth','admin']);
Route::resource('/recommendations', RecommendationController::class)->middleware(['auth','admin']);
Route::delete('/users/{user}/feedback/{id}', [FeedbackController::class, 'destroy'])->name('deleteFeedback')->middleware(['auth','admin']); // check it
Route::get('/statics', [StaticsController::class, 'index'])->middleware(['auth','admin']);
Route::get('/users', [UserController::class, 'index'])->middleware(['auth','admin']);
Route::get('/users/{user}/feedbacks', [UserController::class, 'ThisUserFeedbacks'])->name('feedbacks')->middleware(['auth','admin']);



// User
Route::get('/MyFiles', [UserController::class, 'MyFiles'])->name('MyFiles')->middleware('auth');
Route::delete('/deleteAccount/{user}', [UserController::class, 'deleteAccount'])->name('deleteAccount')->middleware('auth');
Auth::routes();


// quiz
Route::get('/quiz', function(){
     return view('room.quiz.quiz');
})->name('quiz')->middleware('auth');

Route::post('/feedback', [FeedbackController::class, 'store'])->name('postFeedback')->middleware('auth'); // check it

Route::get('/room', function(){
     return view('room.room');
})->name('room')->middleware('auth');