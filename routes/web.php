<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/career', function () {
    return view('career');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/clients', function () {
    return view('clients');
});

Route::get('/our-leader', function () {
    return view('our-leader');
});

Route::get('/partners', function () {
    return view('partners');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/contact', function () {
    return view('contact');
});

