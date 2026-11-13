<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user',function(){
    return 'Hello I am user';
});
Route::get('/about',function(){
    return view('about-us');
});

Route::get('/contact',function(){
    return view('contact-us');
});


Route::get('/user/{name}', function($name){
    return "welcome {$name}";
});