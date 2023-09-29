<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\guestController;
use App\Http\Controllers\loginController;

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
//Route::get('/guest/request', function () {
    //return view('guest.guestrequestform');
//});
Route::get('/lecturers/request', function () {
    return view('lecturers.lecturerrequestform');
});
//Route::get('/login', function () {
    //return view('Login')->middleware('LoggedIn');
//});
Route::get('/footer', function () {
    return view('footer');
});
Route::get('/Register', function () {
    return view('registration');
});
Route::get('/sturegister', function () {
    return view('sturegistration');
});
//Route::get('/guestregistration', function () {
    //return view('guestregistration');
//});
//Route::get('/home', function () {
    //return view('home')->middleware('IsLoggedIn');
//});
Route::get('/home1', function () {
    return view('home1');
});
Route::get('/headerFooter', function () {
    return view('Layout.headerFooter');
});

Route::get('/allocate', function () {
    return view('allocate');
});

Route::get('/lecturers/lecturerhome', function () {
    return view('lecturers.lecturerhome');
});

Route::get('/guest/guesthome', function () {
    return view('guest.guesthome');
});

Route::get('/table', function () {
    return view('table');
});

Route::get('/add', function () {
    return view('guest.add');
});


Route::post('/gueststore', [guestController::class, 'gueststore'])->name('gueststore'); //storing data in guest table.

//Route::get('/guest/guestregistration', [guestController::class, 'guestregistration'])->middleware('LoggedIn'); //restrict from home to guest registration, go to guest registraion
Route::get('/guest/guestregistration', [guestController::class, 'guestregistration']);

Route::get('/guest/guestrequest', [guestController::class, 'guestrequest']);

Route::post('/login', [loginController::class, 'login'])->name('login'); //login functions

//Route::get('/loginpage', [loginController::class, 'loginpage'])->middleware('LoggedIn');//restrict from home to login, go to login
Route::get('/loginpage', [loginController::class, 'loginpage']);

Route::get('/logout', [loginController::class, 'logout'])->name('logout'); //loout functions

//Route::get('/home', [loginController::class, 'home'])->middleware('IsLoggedIn'); //restrict from login to home
//Route::get('/home', [loginController::class, 'home']);
Route::get('/guest/guesthome', [guestController::class, 'guesthome']);

Route::get('/forgetpassword', [loginController::class, 'forgetpassword'])->name('forgetpassword'); //forget passsword page.

Route::post('/guestreq', [guestController::class, 'guestreq'])->name('guestreq');
