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
use App\Http\Controllers\timetableController;

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

Route::get('/welcome/about', function () { //route to view welcome page.
    return view('about');
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
Route::get('/guestpage', function () {
    return view('guestpage');
});

//Route::get('/tablebcslevel1', function () {
    //return view('tablebcslevel1');
//});

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

//Route::get('/guest/guestlecturehalldetails', function () {
    //return view('guest.guestlecturehalldetails');
//});

Route::get('/guest/guestlecturehalldetails', [guestController::class, 'guestlecturehalldetails'])->name('guestlecturehalldetails'); //route to view lecturehalls.

//Route::get('/guest/lab', function () { //route to view lab page.
    //return view('guest.guestlab');
//});

Route::get('/guest/lab', [guestController::class, 'guestlab'])->name('guestlab'); //route to view lab page.



/*Login routes*/
Route::post('/login', [loginController::class, 'login'])->name('login'); //login functions

//Route::get('/loginpage', [loginController::class, 'loginpage'])->middleware('LoggedIn');//restrict from home to login, go to login
Route::get('/loginpage', [loginController::class, 'loginpage']);

Route::get('/logout', [loginController::class, 'logout'])->name('logout'); //logout functions

Route::get('/forgetpassword', [loginController::class, 'forgetpassword'])->name('forgetpassword'); //forget passsword page.



/*Lecture routes*/
//Route::get('/lecturers/lab', function () { //view lecture lab page.
    //return view('lecturers.lecturerlab');
//});

/*Route::get('/lecturers/lecturerhome', function () { //view lecture home page.
    return view('lecturers.lecturerhome');
});*/

Route::get('/lecturers/lecturerhome', [lecturerController::class, 'lecturerhome']);

//Route::get('/lecturers/leclecturehalldetails', function () {
   //return view('lecturers.leclecturehalldetails');
//});

Route::get('/lecturers/leclecturehalldetails', [lecturerController::class, 'leclecturehalldetails'])->name('leclecturehalldetails'); //route to view lecturehalls.

Route::get('/lecturers/lab', [lecturerController::class, 'lecturelab'])->name('lecturelab'); //route to view lab page.

Route::get('/lecturers/request', [lecturerController::class, 'lecturerrequest']); //view request page.

Route::post('/lecturerreq', [lecturerController::class, 'lecturerreq'])->name('lecturerreq'); //store request details in database.

/*academicsupportive routes*/
Route::get('/academicsupportive/academicsupportivehome', [academicsupportiveController::class, 'academicsupportivehome']);

//Route::get('/academicsupportive/accsuplecturehalldetails', function () { //route to view lecturehalls.
    //return view('academicsupportive.accsuplecturehalldetails');
//});
Route::get('/academicsupportive/accsuplecturehalldetails', [academicsupportiveController::class, 'accsuplecturehalldetails'])->name('accsuplecturehalldetails');

//Route::get('/academicsupportive/accsuplab', function () { //route to view lab page.
    //return view('academicsupportive.accsuplab');
//});
/*Route::get('/academicsupportive/request', [lecturerController::class, 'academicsupportiverequest'])->name('academicsupportiverequest');; //view request page.*/

Route::get('/academicsupportive/accsuplab', [academicsupportiveController::class, 'accsuplab'])->name('accsuplab');

Route::get('/academicsupportive/acasuptablebcslevel1sem1', [academicsupportiveController::class, 'viewbcs1sem1'])->name('viewbcs1sem1'); //storing data in lecturer table.
Route::get('/academicsupportive/acasuptablebcslevel1sem2', [academicsupportiveController::class, 'viewbcs1sem2'])->name('viewbcs1sem2');

Route::get('/academicsupportive/acasuptablebcslevel2sem1', [academicsupportiveController::class, 'viewbcs2sem1'])->name('viewbcs2sem1');
Route::get('/academicsupportive/acasuptablebcslevel2sem2', [academicsupportiveController::class, 'viewbcs2sem2'])->name('viewbcs2sem2');

Route::get('/academicsupportive/acasuptablebcslevel3sem1', [academicsupportiveController::class, 'viewbcs3sem1'])->name('viewbcs3sem1');
Route::get('/academicsupportive/acasuptablebcslevel3sem2', [academicsupportiveController::class, 'viewbcs3sem2'])->name('viewbcs3sem2');

Route::get('/academicsupportive/acasuptablebsclevel1sem1', [academicsupportiveController::class, 'viewbsc1sem1'])->name('viewbsc1sem1');
Route::get('/academicsupportive/acasuptablebsclevel1sem2', [academicsupportiveController::class, 'viewbsc1sem2'])->name('viewbsc1sem2');

Route::get('/academicsupportive/acasuptablebsclevel2sem1', [academicsupportiveController::class, 'viewbsc2sem1'])->name('viewbsc2sem1');
Route::get('/academicsupportive/acasuptablebsclevel2sem2', [academicsupportiveController::class, 'viewbsc2sem2'])->name('viewbsc2sem2');

Route::get('/academicsupportive/acasuptablebsclevel3sem1', [academicsupportiveController::class, 'viewbsc3sem1'])->name('viewbsc3sem1');
Route::get('/academicsupportive/acasuptablebsclevel3sem2', [academicsupportiveController::class, 'viewbsc3sem2'])->name('viewbsc3sem2');

Route::post('/academicsupportive/choosetimetable', [academicsupportiveController::class, 'choosetimetable'])->name('choosetimetable');

Route::get('/academicsupportive/filtertimetable', [academicsupportiveController::class, 'filtertimetable'])->name('filtertimetable');

Route::post('/academicsupportive/filtertimetablesubmit', [academicsupportiveController::class, 'filtertimetablesubmit'])->name('filtertimetablesubmit');



/*student routes*/
Route::get('/students/studenthome', [studentController::class, 'studenthome']);

//Route::get('/students/studentlecturehalldetails', function () { //route to view lecturehalls.
   // return view('students.studentlecturehalldetails');
//});

//Route::get('/students/lab', function () { //route to view lab page.
    //return view('students.studentLab');
//});

Route::get('/students/studentlecturehalldetails', [studentController::class, 'studentlecturehalldetails'])->name('studentlecturehalldetails'); //route to view lecturehalls.

Route::get('/students/lab', [studentController::class, 'studentlab'])->name('studentlab'); //route to view lab page.

Route::get('/students/viewtimetable', [studentController::class, 'stchoosetimetable'])->name('stchoosetimetable');


/*admin routes*/
//Route::get('/admin/adminlecturehallopera', function () {
    //return view('admin.adminlecturehallopera');
//});
Route::get('/admin/adminhome', [adminController::class, 'adminhome'])->name('adminhome'); //view admin home page.

Route::get('/admin/adminhallallocation', [adminController::class, 'adminhallallocation'])->name('adminhallallocation');

Route::post('/admin/adminhallallocation1', [adminController::class, 'adminhallallocation1'])->name('adminhallallocation1');

Route::get('/admin/viewhallallocation', [adminController::class, 'viewhallallocation'])->name('viewhallallocation');

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

//Route::get('/admin/student/sturegister', function () { //view student registration page.
    //return view('admin.student.sturegistration');
//});

Route::get('/admin/student/sturegister', [studentController::class, 'sturegister'])->name('admin.student.sturegister');

Route::post('/admin/student/studentstore', [studentController::class, 'studentstore'])->name('studentstore'); //storing data in student table.

Route::get('update-student/{id}',[studentController::class, 'updatestudent'])->name('updatestudent');  //route to function of return selected user details to edit page.

Route::post('update1-student/{id}',[studentController::class, 'updatestudent1'])->name('updatestudent1');  //route to function of update programs.

Route::post('updatestudentpassword-student/{id}',[studentController::class, 'updatestudentpassword'])->name('updatestudentpassword');  //route to function of update student password.


/*admin.lecturer routes*/
Route::get('/admin/lecturer/lectureopera', [lecturerController::class, 'viewlecturer'])->name('admin.lecturer.lectureropera');  //route to view student crud operation page.

Route::get('/admin/lecturer/lecturerregister', function () { //view student registration page.
    return view('admin.lecturer.lecturerregistration');
});

Route::post('/admin/lecturer/lecturerstore', [lecturerController::class, 'lecturerstore'])->name('lecturerstore'); //storing data in lecturer table.

//Route::get('update-lecturer/{id}',[lecturerController::class, 'updatelecturer'])->name('updatelecturer');  //route to function of return selected user details to edit page.

//Route::post('update1-lecturer/{id}',[lecturerController::class, 'updatelecturer1'])->name('updatelecturer1');  //route to function of update programs.

//Route::post('updatelecturerpassword-lecturer/{id}',[lecturerController::class, 'updatelecturerpassword'])->name('updatelecturerpassword');  //route to function of update student password.

/*admin.academicsupportive routes*/
Route::get('/admin/academicsupportive/academicsupopera', [academicsupportiveController::class, 'viewacademicsupportive'])->name('admin.academicsupportive.academicsupopera');  //route to view student crud operation page.

Route::get('/admin/academicsupportive/academicsupregister', function () { //view student registration page.
    return view('admin.academicsupportive.academicsupregistration');
});

Route::post('/admin/academicsupportive/accsupstore', [academicsupportiveController::class, 'accsupstore'])->name('accsupstore'); //storing data in lecturer table.

//Route::get('update-lecturer/{id}',[academicsupportiveController::class, 'updatelecturer'])->name('updatelecturer');  //route to function of return selected user details to edit page.

//Route::post('update1-lecturer/{id}',[academicsupportiveController::class, 'updatelecturer1'])->name('updatelecturer1');  //route to function of update programs.

//Route::post('updatelecturerpassword-lecturer/{id}',[academicsupportiveController::class, 'updatelecturerpassword'])->name('updatelecturerpassword');  //route to function of update student password.



/*admin.lecturehall routes*/
Route::get('/admin/guest/guestopera', [guestController::class, 'viewguest'])->name('admin.guest.guestopera');  //route to view student crud operation page.

/*admin.timetable routes*/
Route::get('/admin/timetable/addtimetable', [timetableController::class, 'addtimetable'])->name('admin.timetable.addtimetable');  //route to view student crud operation page.

Route::post('/admin/timetable/timetablestore', [timetableController::class, 'timetablestore'])->name('timetablestore'); //storing data in lecturer table.

Route::get('/admin/timetable/timetableopera', [timetableController::class, 'viewtimetable'])->name('admin.timetable.timetableopera');  //route to view student crud operation page.

Route::get('update-timetable/{id}',[timetableController::class, 'updatetimetable'])->name('updatetimetable');  //route to function of return selected user details to edit page.

Route::post('update1-timetable/{id}',[timetableController::class, 'updatetimetable1'])->name('updatetimetable1');

Route::post('update2-timetable/{id}',[timetableController::class, 'updatetimetable2'])->name('updatetimetable2');

Route::get('delete-timetable/{id}',[timetableController::class, 'deletetimetable'])->name('deletetimetable');  //route to function of delete programs.
