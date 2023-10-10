<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\guestController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\lecturehallController;
use App\Http\Controllers\courseController;
use App\Http\Controllers\labController;
use App\Http\Controllers\programController;

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
//Route::get('/login', function () {
    //return view('Login')->middleware('LoggedIn');
//});
Route::get('/admin/student/sturegister', function () {
    return view('admin.student.sturegistration');
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

Route::get('/lecturehalldetails', function () {
    return view('lecturehalldetails');
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

Route::get('/header', function () {
    return view('layout.header');
});

Route::get('/admin/adminhome', function () {
    return view('admin.adminhome');
});

Route::get('/tablebcslevel1', function () {
    return view('tablebcslevel1');
});

Route::get('/tablebcslevel2', function () {
    return view('tablebcslevel2');
});

Route::get('/tablebsclevel3', function () {
    return view('tablebsclevel3');
});

Route::get('/stuprofile', function () {
    return view('stuprofile');
});


/*guest routes*/

Route::post('/gueststore', [guestController::class, 'gueststore'])->name('gueststore'); //storing data in guest table.

//Route::get('/guest/guestregistration', [guestController::class, 'guestregistration'])->middleware('LoggedIn'); //restrict from home to guest registration, go to guest registraion
Route::get('/guest/guestregistration', [guestController::class, 'guestregistration']);

Route::get('/guest/guestrequest', [guestController::class, 'guestrequest']);

//Route::get('/home', [loginController::class, 'home'])->middleware('IsLoggedIn'); //restrict from login to home
//Route::get('/home', [loginController::class, 'home']);
Route::get('/guest/guesthome', [guestController::class, 'guesthome']);

Route::post('/guestreq', [guestController::class, 'guestreq'])->name('guestreq');



/*Login routes*/
Route::post('/login', [loginController::class, 'login'])->name('login'); //login functions

//Route::get('/loginpage', [loginController::class, 'loginpage'])->middleware('LoggedIn');//restrict from home to login, go to login
Route::get('/loginpage', [loginController::class, 'loginpage']);

Route::get('/logout', [loginController::class, 'logout'])->name('logout'); //loout functions

Route::get('/forgetpassword', [loginController::class, 'forgetpassword'])->name('forgetpassword'); //forget passsword page.



/*Lecture routes*/
Route::get('/lecturers/request', function () {
    return view('lecturers.lecturerrequestform');
});

/*academicsupportive routes*/

/*student routes*/

/*admin routes*/
//Route::get('/admin/adminlecturehallopera', function () {
    //return view('admin.adminlecturehallopera');
//});
/*admin.lecturehall routes*/
Route::get('/admin/lecturehall/adminlecturehallopera', [lecturehallController::class, 'viewlecturehall'])->name('viewlecturehall');

Route::post('/admin/lecturehall/addlecturehall', [lecturehallController::class, 'addlecturehall'])->name('addlecturehall');

Route::get('delete-lechall/{id}',[lecturehallController::class, 'deletelecturehall'])->name('deletelecturehall');

Route::get('update-lechall/{id}',[lecturehallController::class, 'updatelecturehall'])->name('updatelecturehall');

Route::post('update1-lechall/{id}',[lecturehallController::class, 'updatelecturehall1'])->name('updatelecturehall1');

/*admin.course routes*/
Route::get('/admin/course/admincourseopera', [courseController::class, 'viewcourse'])->name('viewcourse');

Route::post('/admin/course/addcourse', [courseController::class, 'addcourse'])->name('addcourse');

Route::get('delete-course/{id}',[courseController::class, 'deletecourse'])->name('deletecourse');

Route::get('update-course/{id}',[courseController::class, 'updatecourse'])->name('updatecourse');

Route::post('update1-course/{id}',[courseController::class, 'updatecourse1'])->name('updatecourse1');

/*admin.lab routes*/
Route::get('/admin/lab/adminlabopera', [labController::class, 'viewlab'])->name('viewlab');

Route::post('/admin/lab/addlab', [labController::class, 'addlab'])->name('addlab');

Route::get('delete-lab/{id}',[labController::class, 'deletelab'])->name('deletelab');

Route::get('update-lab/{id}',[labController::class, 'updatelab'])->name('updatelab');

Route::post('update1-lab/{id}',[labController::class, 'updatelab1'])->name('updatelab1');

/*admin.lab routes*/
Route::get('/admin/program/adminprogramopera', [programController::class, 'viewprogram'])->name('viewprogram');

Route::post('/admin/program/addprogram', [programController::class, 'addprogram'])->name('addprogram');

Route::get('delete-program/{id}',[programController::class, 'deleteprogram'])->name('deleteprogram');

Route::get('update-program/{id}',[programController::class, 'updateprogram'])->name('updateprogram');

Route::post('update1-program/{id}',[programController::class, 'updateprogram1'])->name('updateprogram1');
