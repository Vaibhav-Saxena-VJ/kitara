<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/about-us', function () {
    return view('frontend.about-us');
});

Route::get('/services', function () {
    return view('frontend.services');
});

Route::get('/contactus', function () {
    return view('frontend.contactus');
});

Route::get('/salesforce-development', function () {
    return view('frontend.salesforce-development');
});

Route::get('/implementation-services', function () {
    return view('frontend.implementation-services');
});

Route::get('/community-cloud-implementation', function () {
    return view('frontend.community-cloud-implementation');
});

Route::get('/data-migration', function () {
    return view('frontend.data-migration');
});

Route::get('/field-service-lightning-implementation', function () {
    return view('frontend.field-service-lightning-implementation');
});

Route::get('/integration', function () {
    return view('frontend.integration');
});

Route::get('/salesforce-support', function () {
    return view('frontend.salesforce-support');
});

Route::get('/products', function () {
    return view('frontend.products');
});