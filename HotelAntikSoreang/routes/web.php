<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('FP.home');
});

Route::get('/rooms', function () {
    return view('FP.rooms');
});

Route::get('/contact', function () {
    return view('FP.contact');
});

Route::get('/facilities', function () {
    return view('FP.facilities');
});