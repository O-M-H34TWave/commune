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

Route::get('/contact', function () {
   return view('contact');
})->name('contact');

Route::get('/login', function () {
   return view('auth.login');
})->name('login');

Route::get('/login/admin', function () {
   return view('/auth.admin-login');
})->name('login.admin');

Route::get('/login/employee', function () {
   return view('auth.employee-login');
})->name('login.employee');