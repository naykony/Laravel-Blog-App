<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CretpostController;
use App\Http\Controllers\BlogController;



Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/post/{id}', [BlogController::class, 'show'])->name('post');


Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contactcrt');



Route::get('/create', [CretpostController::class, 'index'])->name('create');
Route::post('/create', [CretpostController::class, 'store'])->name('createpost');







Route::get('/delete', function () {
    return view('delete');
})->name('delete');

Route::get('/edit', function () {
    return view('edit');
})->name('edit');




