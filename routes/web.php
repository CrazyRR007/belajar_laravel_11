<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\facades\Response;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/belajar', function () {
    return view('belajar');
});

// Route::get('/style', function () {
//     $path = public_path('css/main.css');
//     return Response::file($path, ['Content-Type' => 'text/css']);
// });
