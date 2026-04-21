<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
return view('index');
});

Route::get('/quienes-somos', function () {
    return view('quienes_somos');
});

Route::get('/comercializacion', function () {
    return view('comercializacion');
});

Route::get('/terminos', function () {
    return view('terminos');
});