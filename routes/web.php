<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [
            [ 'id' => 1,
              'title' => 'Listing One',
              'description' => 'This is the description for listing one'
            ],
            [ 'id' => 2,
              'title' => 'Listing Two',
              'description' => 'This is the description for listing two'
            ]
        ]
    ]);
});

// Simple HTML response
Route::get('/hello', function () {
    return response('<h1>Hello Laravel! 🚀</h1>')
        ->header('Content-Type', 'text/plain')
        ->header('foo', 'bar');
});

// Route with parameter
Route::get('/user/{name}', function ($name) {
    return "Hello, $name!";
});

Route::get('/post/{id}', function ($id) {
    return response('Post ' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function (Request $request) {
    return $request->name . ' ' . $request->city;
});


