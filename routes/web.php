<?php

use Illuminate\Support\Facades\Route;

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

//and this the lange form the url
Route::get('/{username}', function ($username) {
    return view('home',["user" => $username]);
})->name('home');

//this shout form
Route::get('/about/{user}/{age}', function($user,$age){
    return view("about", compact('user', 'age'));
})->name('about');

//we use the fallback when we have no url match
Route::fallback(function(){
    return view('404');
});
