<?php

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
    return view('welcome');
});
Route::get('/register', function () {
    return view('registration');
});

Route::get('/request', function () {
    return view('requestform');
});

Route::get('/request/2homepage', function () {
    return view('secondhomepage');
});

Route::get('/home', function () {
    return view('home');
});
