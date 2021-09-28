<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\booksController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\newsControllers;
use App\Http\Controllers\audiosController;
use App\Http\Controllers\donateController;
use App\Http\Controllers\imagesController;
use App\Http\Controllers\signUpController;
use App\Http\Controllers\videosController;
use App\Http\Controllers\aboutUsController;
use App\Http\Controllers\coursesController;
use App\Http\Controllers\eglisesController;
use App\Http\Controllers\lessonsController;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\postBookController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\audioStreamController;
use App\Http\Controllers\profilePageController;
use App\Http\Controllers\testimoniesController;
use App\Http\Controllers\uploadImageController;
use App\Http\Controllers\videoStreamController;
use App\Http\Controllers\allResourcesController;
use App\Http\Controllers\bookCommandsController;
use App\Http\Controllers\uploadAudiosController;
use App\Http\Controllers\uploadVideosController;
use App\Http\Controllers\viewDonationController;
use App\Http\Controllers\registerAdminController;
use App\Http\Controllers\resetPasswordController;
use App\Http\Controllers\forgotPasswordController;
use App\Http\Controllers\registeredMembersController;
use App\Http\Controllers\newsletterSubscribersController;

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

Route::get('/', [welcomeController::class, 'index'])->name("welcome");

Route::get('videos', [videosController::class, 'show'])->name("videos");

Route::get('Images', [imagesController::class, 'show'])->name("images");

Route::get('audios', [audiosController::class, 'show'])->name("audios");

Route::get('eglises/{name}', [eglisesController::class, 'show'])->name("eglises");

Route::get('about-us', [aboutUsController::class, 'show']);

Route::get('lessons/{lesson}', [lessonsController::class, 'show'])->name("lessons");

Route::get('video-stream/{selected_video}', [videoStreamController::class, 'show'])->name("video-stream");

Route::get('audio-stream/{selected_audio}', [audioStreamController::class, 'show'])->name("audio-stream");

Route::get('books/{selected_book}', [booksController::class, 'show'])->name("selected_book");

Route::get('donate', [donateController::class, 'show'])->name("donate");

Route::get('login', [loginController::class, 'show'])->name("login");

Route::get('signup', [signUpController::class, 'show'])->name("signup");

Route::get('forgot_password', [forgotPasswordController::class, 'show'])->name("forgot_password");

Route::get('reset_password', [resetPasswordController::class, 'show'])->name("reset_password");

Route::get('dashboard', [dashboardController::class, 'show'])->name("dashboard");

Route::get('profile-page', [profilePageController::class, 'show'])->name("profile-page");

Route::get('admin', [adminController::class, 'show'])->name("admin");

Route::get('upload-videos', [uploadVideosController::class, 'show'])->name("upload-videos");

Route::get('upload-audios', [uploadAudiosController::class, 'show'])->name("upload-audios");

Route::get('upload-images', [uploadImageController::class, 'show'])->name("upload-images");

Route::get('register-admin', [registerAdminController::class, 'show'])->name("register-admin");

Route::get('post-books', [postBookController::class, 'show'])->name("post-books");

Route::get('book-commands', [bookCommandsController::class, 'show'])->name("book-commands");

Route::get('courses', [coursesController::class, 'show'])->name("courses");

Route::get('news', [newsControllers::class, 'show'])->name("news");

Route::get('registered-members',[registeredMembersController::class, 'show'])->name("registered-members");

Route::get('testimonies', [testimoniesController::class, 'show'])->name("testimonies");

Route::get('view-donations', [viewDonationController::class, 'show'])->name("view-donations");

Route::get('newsletter-subscribers', [newsletterSubscribersController::class, 'show'])->name("newsletter-subscribers");

Route::get('all-resources', [allResourcesController::class, 'show'])->name("all-resources");