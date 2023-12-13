<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/post', function () {
    return view('post');
})->name('myPost');

Route::get('/test', function () {
    return view('about');
})->name('about');


// Route Prefix 
// Route::prefix('page')->group(function() {
//     Route::get('/', function () {
//         return view('home');
//     })->name('home');

//     Route::get('/post', function () {
//         return view('post');
//     })->name('myPost'); 

//     Route::get('/test', function () {
//         return view('about');
//     })->name('about');

//     Route::redirect('/page/about', '/page/test', 301);
// });


Route::fallback(function() {
    return "<h1>Page Not Found!</h1>";
});



// 1st Method
// Route::get('/post/{id?}/', function (string $id = null) {
//     if ($id) {
//         return "<h1>Post ID : ". $id ."</h1>";
//     } else {
//         return "<h1>No ID Found!</h1>";
//     }    
// })->where('id', '[0-9]+');


// Route::get('/post/{id?}/comment/{commentid?}', function (string $id = null, string $comment = null) {
//     if ($id) {
//         return "<h1>Post ID : ". $id ."</h1><h2>". $comment ."</h2>";
//     } else {
//         return "<h1>No ID Found!</h1>";
//     }    
// })->where('id', '[0-9]+')->whereAlpha('commentid');


// 2nd Method
// Route::get('/post', function () {
//     return '<h1>King Waji Awan</h1>';
// });


// 3rd Method
// Route::view('/hello', 'post');