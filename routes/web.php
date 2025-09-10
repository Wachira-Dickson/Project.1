<?php

use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('welcome');
});

// Simple HTML response
Route::get('/hello', function () {
    return response('<h1>Hello Laravel! 🚀</h1>')
        ->header('Content-Type', 'text/plain');
});

// Route with parameter
Route::get('/user/{name}', function ($name) {
    return "Hello, $name!";
});


