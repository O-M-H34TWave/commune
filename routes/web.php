<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/news', function () {
    return view('news');
 })->name('news');

 Route::get('/services', function () {
    return view('services');
 })->name('services');

  Route::get('/infos', function () {
    return view('infos');
 })->name('infos');