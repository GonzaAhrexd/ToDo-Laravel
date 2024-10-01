<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/to-do', function(){
    return view('app');
});

Route::get('/to-do-2', function(){
    return view('todos/index');
});