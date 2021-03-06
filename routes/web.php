<?php

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
    return view('partials.home');
});

Route::get('/textual', function () {
    return view('partials.textual');
});

Route::get('/textual/writing', function () {
    return view('partials.writing');
});

Route::get('/textual/notebook', function () {
    return view('partials.notebook');
});

Route::get('/about', function () {
    return view('partials.about');
});

Route::get('/about/cv', function () {
    return view('partials.cv');
});

Route::get('/about/news', function () {
    return view('partials.news');
});

Route::get('/about/news/{id}', function () {
    return view('partials.news-single');
});

Route::get('/visual', function () {
    return view('partials.visual');
});

Route::get('/contact', function () {
    return view('partials.contact');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
