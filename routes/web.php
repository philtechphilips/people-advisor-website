<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/services', function () {
    return view('service');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/contact-us', function () {
    return view('contact');
});