<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\guestController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\lecturehallController;
use App\Http\Controllers\courseController;
use App\Http\Controllers\labController;
use App\Http\Controllers\programController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\lecturerController;
use App\Http\Controllers\academicsupportiveController;

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

Route::get('/', function () { //route to view welcome page.
    return view('welcome');
});
//Route::get('/guest/request', function () {
    //return view('guest.guestrequestform');
//});
//Route::get('/login', function () {
    //return view('Login')->middleware('LoggedIn');
//});

//Route::get('/guestregistration', function () {
    //return view('guestregistration');
//});
//Route::get('/home', function () {
    //return view('home')->middleware('IsLoggedIn');
//});
Route::get('/home1', function () {
    return view('home1');
});
Route::get('/headerFooter', function () {  //route to view header and footer layout.
    return view('Layout.headerFooter');
});





Route::get('/guest/guesthome', function () {
    return view('guest.guesthome');
});

Route::get('/table', function () {
    return view('table');
});

Route::get('/add', function () { //route to testing page.
    return view('guest.add');
});

Route::get('/header', function () {  //route to view header layout.
    return view('layout.header');
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

Route::get('/guest/guestrequest', [guestController::class, 'guestrequest']); //view request page.

//Route::get('/home', [loginController::class, 'home'])->middleware('IsLoggedIn'); //restrict from login to home
//Route::get('/home', [loginController::class, 'home']);
Route::get('/guest/guesthome', [guestController::class, 'guesthome']);

Route::post('/guestreq', [guestController::class, 'guestreq'])->name('guestreq'); //store request details in database.

Route::get('/guest/guestlecturehalldetails', function () { //route to view lecturehalls.
    return view('guest.guestlecturehalldetails');
});

Route::get('/guest/lab', function () { //route to view lab page.
    return view('guest.guestlab');
});




/*Login routes*/
Route::post('/login', [loginController::class, 'login'])->name('login'); //login functions

//Route::get('/loginpage', [loginController::class, 'loginpage'])->middleware('LoggedIn');//restrict from home to login, go to login
Route::get('/loginpage', [loginController::class, 'loginpage']);

Route::get('/logout', [loginController::class, 'logout'])->name('logout'); //logout functions

Route::get('/forgetpassword', [loginController::class, 'forgetpassword'])->name('forgetpassword'); //forget passsword page.



/*Lecture routes*/
Route::get('/lecturers/lab', function () { //view lecture lab page.
    return view('lecturers.lecturerlab');
});

/*Route::get('/lecturers/lecturerhome', function () { //view lecture home page.
    return view('lecturers.lecturerhome');
});*/

Route::get('/lecturers/lecturerhome', [lecturerController::class, 'lecturerhome']);

Route::get('/lecturers/leclecturehalldetails', function () {
    return view('lecturers.leclecturehalldetails');
});

Route::get('/lecturers/request', [lecturerController::class, 'lecturerrequest']); //view request page.

Route::post('/lecturerreq', [lecturerController::class, 'lecturerreq'])->name('lecturerreq'); //store request details in database.

/*academicsupportive routes*/

/*student routes*/
//Route::get('/students/studenthome', function () { //view student home page.
    //return view('students.studenthome');
//});

Route::get('/students/studenthome', [studentController::class, 'studenthome']);

/*admin routes*/
//Route::get('/admin/adminlecturehallopera', function () {
    //return view('admin.adminlecturehallopera');
//});
Route::get('/admin/adminhome', [adminController::class, 'adminhome'])->name('adminhome'); //view admin home page.

//Route::get('/admin/adminhome', function () {
    //return view('admin.adminhome');
//});

/*admin.lecturehall routes*/
Route::get('/admin/lecturehall/adminlecturehallopera', [lecturehallController::class, 'viewlecturehall'])->name('viewlecturehall'); //route to view lecturehall crud operation page.

Route::post('/admin/lecturehall/addlecturehall', [lecturehallController::class, 'addlecturehall'])->name('addlecturehall'); //route to function of add lecturehalls.

Route::get('delete-lechall/{id}',[lecturehallController::class, 'deletelecturehall'])->name('deletelecturehall');  //route to function of delete lecturehalls.

Route::get('update-lechall/{id}',[lecturehallController::class, 'updatelecturehall'])->name('updatelecturehall');  //route to function of return selected user details to edit page.

Route::post('update1-lechall/{id}',[lecturehallController::class, 'updatelecturehall1'])->name('updatelecturehall1'); //route to function of update lecturehall.

/*admin.course routes*/
Route::get('/admin/course/admincourseopera', [courseController::class, 'viewcourse'])->name('viewcourse'); //route to view course crud operation page.

Route::post('/admin/course/addcourse', [courseController::class, 'addcourse'])->name('addcourse');  //route to function of add course.

Route::get('delete-course/{id}',[courseController::class, 'deletecourse'])->name('deletecourse');  //route to function of delete courses.

Route::get('update-course/{id}',[courseController::class, 'updatecourse'])->name('updatecourse');  //route to function of return selected user details to edit page.

Route::post('update1-course/{id}',[courseController::class, 'updatecourse1'])->name('updatecourse1');  //route to function of update course.

/*admin.lab routes*/
Route::get('/admin/lab/adminlabopera', [labController::class, 'viewlab'])->name('viewlab');  //route to view labs crud operation page.

Route::post('/admin/lab/addlab', [labController::class, 'addlab'])->name('addlab');  //route to function of add labs.

Route::get('delete-lab/{id}',[labController::class, 'deletelab'])->name('deletelab');  //route to function of delete labs.

Route::get('update-lab/{id}',[labController::class, 'updatelab'])->name('updatelab');  //route to function of return selected user details to edit page.

Route::post('update1-lab/{id}',[labController::class, 'updatelab1'])->name('updatelab1');  //route to function of update labs.

/*admin.program routes*/
Route::get('/admin/program/adminprogramopera', [programController::class, 'viewprogram'])->name('viewprogram');  //route to view program crud operation page.

Route::post('/admin/program/addprogram', [programController::class, 'addprogram'])->name('addprogram');  //route to function of add programs.

Route::get('delete-program/{id}',[programController::class, 'deleteprogram'])->name('deleteprogram');  //route to function of delete programs.

Route::get('update-program/{id}',[programController::class, 'updateprogram'])->name('updateprogram');  //route to function of return selected user details to edit page.

Route::post('update1-program/{id}',[programController::class, 'updateprogram1'])->name('updateprogram1');  //route to function of update programs.

/*admin.student routes*/
Route::get('/admin/student/stuopera', [studentController::class, 'viewstudent'])->name('admin.student.stuopera');  //route to view student crud operation page.

Route::get('/admin/student/sturegister', function () { //view student registration page.
    return view('admin.student.sturegistration');
});

Route::post('/admin/student/studentstore', [studentController::class, 'studentstore'])->name('studentstore'); //storing data in student table.

Route::get('update-student/{id}',[studentController::class, 'updatestudent'])->name('updatestudent');  //route to function of return selected user details to edit page.

Route::post('update1-student/{id}',[studentController::class, 'updatestudent1'])->name('updatestudent1');  //route to function of update programs.

Route::post('updatestudentpassword-student/{id}',[studentController::class, 'updatestudentpassword'])->name('updatestudentpassword');  //route to function of update student password.


/*admin.lecturer routes*/
//Route::get('/admin/lecturer/stuopera', [studentController::class, 'viewlecturer'])->name('admin.lecturer.lectureropera');  //route to view student crud operation page.

Route::get('/admin/lecturer/lecturerregister', function () { //view student registration page.
    return view('admin.lecturer.lecturerregistration');
});

Route::post('/admin/lecturer/lecturerstore', [lecturerController::class, 'lecturerstore'])->name('lecturerstore'); //storing data in lecturer table.

//Route::get('update-lecturer/{id}',[lecturerController::class, 'updatelecturer'])->name('updatelecturer');  //route to function of return selected user details to edit page.

//Route::post('update1-lecturer/{id}',[lecturerController::class, 'updatelecturer1'])->name('updatelecturer1');  //route to function of update programs.

//Route::post('updatelecturerpassword-lecturer/{id}',[lecturerController::class, 'updatelecturerpassword'])->name('updatelecturerpassword');  //route to function of update student password.

/*admin.academicsupportive routes*/
//Route::get('/admin/lecturer/stuopera', [studentController::class, 'viewlecturer'])->name('admin.lecturer.lectureropera');  //route to view student crud operation page.

Route::get('/admin/academicsupportive/academicsupregister', function () { //view student registration page.
    return view('admin.academicsupportive.academicsupregistration');
});

Route::post('/admin/academicsupportive/accsupstore', [academicsupportiveController::class, 'accsupstore'])->name('accsupstore'); //storing data in lecturer table.

//Route::get('update-lecturer/{id}',[academicsupportiveController::class, 'updatelecturer'])->name('updatelecturer');  //route to function of return selected user details to edit page.

//Route::post('update1-lecturer/{id}',[academicsupportiveController::class, 'updatelecturer1'])->name('updatelecturer1');  //route to function of update programs.

//Route::post('updatelecturerpassword-lecturer/{id}',[academicsupportiveController::class, 'updatelecturerpassword'])->name('updatelecturerpassword');  //route to function of update student password.
