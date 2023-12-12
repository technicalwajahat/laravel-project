<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// 1st Method

Route::get('/post', function () {
    return view('post');
});

// 2nd Method

// Route::get('/post', function () {
//     return '<h1>King Waji Awan</h1>';
// });

// 3rd Method

// Route::view('post', '/hello');