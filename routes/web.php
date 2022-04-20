<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;



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


// Auth::routes();

Route::get('/',[PageController::class, 'homepage'])->name('home');

Route::get('/about-us',[PageController::class, 'about_us'])->name('about-us');

Route::get('/gallery',[PageController::class, 'gallery'])->name('gallery');

Route::get('/country/{slug}',[CountryController::class, 'show'])->name('country.show');

Route::get('/courses',[CourseController::class, 'index'])->name('course.index');

Route::get('/course/{slug}',[CourseController::class, 'show'])->name('course.show');

Route::get('/contact',[ContactController::class, 'index'])->name('contact-us');

Route::post('/contact/add',[ContactController::class, 'store'])->name('contact.store');


Route::get('/blogs',[BlogController::class, 'index'])->name('blogs.index');

Route::get('/blog/{slug}',[BlogController::class, 'show'])->name('blog.show');

Route::post('/comment/add',[CommentController::class,'store'])->name('comment.store');

Route::get('/category/{slug}',[PageController::class,'filtered_blogs'])->name('filtered_blogs');






Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
