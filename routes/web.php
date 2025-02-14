<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\facades\Response;

// Route::get('/', function () {
//     return view('Home');
// });

// Route::get('/login', function(){
//     return view('Login');
// });

Route::get('/', function () {
    return view('Romantic');
});

// Route::get('/style', function () {
//     $path = public_path('css/main.css');
//     return Response::file($path, ['Content-Type' => 'text/css']);
// });
