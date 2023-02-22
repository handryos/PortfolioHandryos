<?php

use Illuminate\Support\Facades\Route;



Route::resource('/contact', ContactController::class);

Route::get('/', function () {
    return view('site.home');
})->name("site.home");

Route::get('/sobre', function () {
    return view('site.about');
})

->name('site.about');




