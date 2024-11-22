<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoginController;

//Auth::routes();
//Route::get('/', function () {
//   return view('welcome');
//});

Route::get('/',[App\Http\Controllers\HomepageController::class,'index'])->name('homepage');
Route::get('/about',[App\Http\Controllers\HomepageController::class,'about'])->name('about');
Route::get('/gallery',[App\Http\Controllers\HomepageController::class,'gallery'])->name('gallery');
Route::get('/gallery/more', [HomepageController::class, 'seeMoreImages'])->name('gallery.more'); // Extended Gallery page
Route::get('/rooms',[App\Http\Controllers\HomepageController::class,'rooms'])->name('rooms');
Route::get('/reviews',[App\Http\Controllers\HomepageController::class,'reviews'])->name('reviews');
Route::post('/booking',[App\Http\Controllers\BookingController::class,'create-booking']);
Route::post('/contact/submit', [ContactController::class, 'submitContact'])->name('contact.submit');


Route::get('/login',[App\Http\Controllers\LoginController::class,'ShowLoginForm'])->name('login');
Route::post('/login',[App\Http\Controllers\LoginController::class,'login']);
Route::post('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Auth::routes();


