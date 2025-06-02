<?php

use Illuminate\Routing\ViewController;
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
    return view('homepage');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/fruits', [App\Http\Controllers\ViewController::class, 'indexFruits'])->name('fruits');
Route::get('/about-us', [App\Http\Controllers\ViewController::class, 'aboutUs'])->name('about');
Route::get('/blog', [App\Http\Controllers\ViewController::class, 'blog'])->name('blog');
Route::get('/contact-us', [App\Http\Controllers\ViewController::class, 'contact'])->name('contact');
Route::get('/policy', [App\Http\Controllers\ViewController::class, 'policy'])->name('policy');

