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

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/unggul', function () {
    return view('unggul');
});

Route::get('/STRUCTURE/class', function () {
    return view('STRUCTURE/class');
});

Route::get('/STRUCTURE/deploy', function () {
    return view('STRUCTURE/deploy');
});

Route::get('/BEHAVIOUR/usecase', function () {
    return view('BEHAVIOUR/usecase');
});

Route::get('/BEHAVIOUR/activ', function () {
    return view('BEHAVIOUR/activ');
});


