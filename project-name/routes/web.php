<?php

use App\Http\Controllers\hammad;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/about', function(){
//     return view('about');
// });
// Route::get('/gallery',function(){
//     return view('gallery');
// // });
// Route::get('/',[hammad::class,"show"]);
// Route::get('/',[hammad::class,"khow"]);
// Route::get('/',[hammad::class,"know"]);
Route::get('/', function() {
    return view('know');
});