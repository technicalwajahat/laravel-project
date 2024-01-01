<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('home'); 
// })->name('home');


Route::controller(UserController::class)->group(function () {
    Route::get('/', 'showUsers')->name('home');
    Route::get('/user/{id}', 'singleUser')->name('view.user');
    Route::post('/add', 'addUser')->name('addUser');
    Route::POST('/updateUser/{id}', 'updateUser')->name('update.user');
    Route::GET('/updatePage/{id}', 'updatePage')->name('update.page');
    Route::get('/delete/{id}', 'deleteUser')->name('delete.user');
    Route::view('newUser', '/addUser');
});


// Route::get('/users', function () {
//     return view('users', ['user' => "Waji Awan", "city" => "Lahore"]);
// })->name('users');


// Route::get('/users', function () {
//     return view('users')
//     ->with('user', 'Waji Awan')
//     ->with('city', 'Lahore');
// })->name('users');


// Route::get('/users/{id}', function ($id) {
//     return "<h1>User : ". $id ."</h1>";
// })->name('users');


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


// Route::fallback(function() {
//     return "<h1>Page Not Found!</h1>";
// });

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