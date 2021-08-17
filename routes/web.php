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
    return view('pages.welcome');
});

Route::get('videos', function () {
    return view('pages.videos');
});

Route::get('Images', function () {
    return view('pages.images');
});

Route::get('audios', function () {
    return view('pages.audios');
});

Route::get('eglises/{name}', function($name) {
    return view('pages.eglises',["eglise" => $name]);
})->name("eglises");

Route::get('about-us', function() {
    return view('pages.about_us');
});

Route::get('lessons/{lesson}', function($lesson) {
    return view('pages.lessons',["lesson" => $lesson]);
})->name("lessons");

Route::get('video-stream/{selected_video}', function($selected_video) {
    return view('pages.video-stream',["selected_video" => $selected_video]);
})->name("video-stream");
