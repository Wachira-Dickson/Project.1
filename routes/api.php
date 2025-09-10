<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::gets('/posts', function () {
    return response()->json([
        'posts' => [
            [
                'title' => 'My first post',
                'body' => 'This is the body of my first post'
            ],
            [
                'title' => 'My second post',
                'body' => 'This is the body of my second post'
            ]
        ]
    ]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
