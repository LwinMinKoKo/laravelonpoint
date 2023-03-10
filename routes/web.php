<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');


// });

// Define New Route
Route::get('/custom',function() {
    return view('custom');

});


// Define New Route 2
Route::get('/custom_two',function() {
    return view('custom_two');

});


// url data passing
Route::get('/custom/{id}',function($id) {
    return ("Here you type $id "); 
});

//route naming
Route::get('routenaming',function(){

    return redirect ('custom_two');

});


 //route naming 2
Route::get('routenaming2',function(){

    return   'Welcome to naming';

})->name('custom_two');


// working with controller
Route::get('/', [ArticleController::class, 'index']);
Route::get('/details',[ArticleController::class,'index']);
Route::get('/details/{id}',[ArticleController::class,'details']);
Route::post('/comments/add', [CommentController::class,'create']);
Route::get('/comments/delete/{id}', [CommentController::class,'delete']);

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//From chapter 
Route::get('/articles/add',[ArticleController::class,'add']);
Route::post('/articles/add',[ArticleController::class,'create']);
Route::get('/articles/delete/{id}',[ArticleController::class,'delete']);
