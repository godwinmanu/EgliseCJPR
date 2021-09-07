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
})->name("welcome");

Route::get('videos', function () {
    return view('pages.videos');
})->name("videos");

Route::get('Images', function () {
    return view('pages.images');
})->name("images");

Route::get('audios', function () {
    return view('pages.audios');
})->name("audios");

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

Route::get('audio-stream/{selected_audio}', function($selected_audio) {
    return view('pages.audio-stream',["selected_audio" => $selected_audio]);
})->name("audio-stream");

Route::get('books/{selected_book}', function($selected_book) {
    return view('pages.books',["selected_book" => $selected_book]);
})->name("selected_book");

Route::get('donate', function() {
    return view('pages.donate');
})->name("donate");

Route::get('login', function() {
    return view('pages.login');
})->name("login");

Route::get('signup', function() {
    return view('pages.signup');
})->name("signup");

Route::get('forgot_password', function() {
    return view('pages.forgot_password');
})->name("forgot_password");

Route::get('reset_password', function() {
    return view('pages.reset_password');
})->name("reset_password");

Route::get('dashboard', function() {
    return view('pages.dashboard');
})->name("dashboard");

Route::get('profile-page', function() {
    return view('pages.profile-page');
})->name("profile-page");

Route::get('admin', function() {
    return view('pages.admin');
})->name("admin");

Route::get('upload-videos', function() {
    return view('pages.upload-videos');
})->name("upload-videos");

Route::get('upload-audios', function() {
    return view('pages.upload-audios');
})->name("upload-audios");

Route::get('upload-images', function() {
    return view('pages.upload-images');
})->name("upload-images");

Route::get('register-admin', function() {
    return view('pages.register-admin');
})->name("register-admin");

Route::get('post-books', function() {
    return view('pages.post-books');
})->name("post-books");

Route::get('book-commands', function() {
    return view('pages.book-commands');
})->name("book-commands");

Route::get('courses', function() {
    return view('pages.courses');
})->name("courses");

Route::get('news', function() {
    return view('pages.news');
})->name("news");

Route::get('registered-members', function() {
    return view('pages.registered-members');
})->name("registered-members");

Route::get('testimonies', function() {
    return view('pages.testimonies');
})->name("testimonies");

Route::get('view-donations', function() {
    return view('pages.view-donations');
})->name("view-donations");

Route::get('all-resources', function() {
    return view('pages.all-resources');
})->name("all-resources");