<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\videoController;
use App\Http\Controllers\videoPage;

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


Route::get('/about', [aboutController::class, 'about'])->name('about');
Route::get('/contact', [contactController::class, 'contact'])->name('contact');
Route::get('/video', [videoController::class, 'video'])->name('video')->name('video');
Route::get('/video-page', [videoPage::class, 'videoPage'])->name('video');