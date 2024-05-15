<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dasboard', function () {
    return view('tamplate.dasboard');
});

Route::get('documentation', function () {
    return view('documentation');
});

Route::get('tamplate', function () {
    return view('tamplate.dasboard');
});

Route::get('icon', function () {
    return view('tamplate.icon');
});

Route::get('nontification', function () {
    return view('tamplate.notification');
});



