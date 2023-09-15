<?php

use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Route;



Route::get('/', [BasicController::class, 'home'])->name('home');
Route::get('/about-us-page', [BasicController::class, 'about'])->name('about');
Route::get('/post-page', [BasicController::class, 'post'])->name('post');
Route::get('/product', [BasicController::class, 'product'])->name('product');

Route::get('/user', [BasicController::class, 'user'])->name('contact.user');

Route::get('/trash', [BasicController::class, 'trash'])->name('contact.deleted');

Route::get('/delete/{id}', [BasicController::class, 'delete']);

// permenant delete 
Route::get('/pdelete/{id}', [BasicController::class, 'pdelete']);
Route::get('/restore/{id}', [BasicController::class, 'restore']);

Route::get('/edit/{id}', [BasicController::class, 'edit']);
Route::post('/update/{id}', [BasicController::class, 'update']);

Route::get('/contact', [BasicController::class, 'contact'])->name('contact');

Route::post('/contact', [BasicController::class, 'form']);

Route::get('/sessionDelete', [BasicController::class, 'sessionDelete']);

Route::get('/file', [BasicController::class, 'fileView']);
Route::post('/file', [BasicController::class, 'file']);