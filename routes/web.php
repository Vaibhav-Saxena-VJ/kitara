<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/services', function () {
    return view('frontend.services');
});

Route::get('/about-us', function () {
    return view('frontend.about-us');
});

Route::get('/contactus', function () {
    return view('frontend.contact-us');
});
