<?php

use Illuminate\Support\Facades\Route;


// url , function for page name
Route::get('/', function () {
    return view('welcome');
});

// url dena hai 
Route::get('/home-page',function(){
    // knsi file access krni hy
    return view('home');
})->name('home');

//  ye about url k lye hai 
Route::get('/about-us-page', function () {

    // file 
    return view('about');

    // about ek anme hai 
})->name('about');

Route::get('/post', function () {
    return view('post');
})->name('post');

Route::get('/product', function () {
    return view('product');
})->name('product');




// Route::get('/product/{id?}',function($id = null){
//     return "<h1>Product $id </h1>";
// })->whereIn('id',['art','movie','lawyer']);

// ->whereAlphaNumeric('id')
// ->whereAlpha('id')
// ->whereNumber('id')