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


//---------------------------------------------
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');

Route::get('/admissions', function () {
    return view('admissions');
})->name('admissions');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/registration', function () {
    return view('register');
})->name('registration');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/editprofile', function () {
    return view('editprofile');
})->name('editprofile');


Route::post('/contact/submit',  'App\Http\Controllers\HomeController@AddContact')->name('contact-form');

 Route::post('/profile/edit',  'App\Http\Controllers\HomeController@ProfileEdit')->name('profile-edit');
//
 Route::post('/profile/edit/update1',  'App\Http\Controllers\HomeController@ProfileEdit1')->name('profile-edit-1');
//
 Route::post('/profile/edit/update2',  'App\Http\Controllers\HomeController@ProfileEdit2')->name('profile-edit-4');
//
 Route::post('/profile/edit/update3',  'App\Http\Controllers\HomeController@ProfileEdit3')->name('profile-edit-3');
//
 Route::post('/register/submit',  'App\Http\Controllers\HomeController@Register')->name('register-form');
//
 Route::post('/login/submit',  'App\Http\Controllers\HomeController@Login')->name('login-form');

  Route::post('/adminpanel/Users',  'App\Http\Controllers\HomeController@ToUsers')->name('toUsers');
  Route::post('/adminpanel/userDetails',  'App\Http\Controllers\HomeController@UserDetails')->name('userdetails');
  Route::post('/adminpanel/userpasswordbyadmin',  'App\Http\Controllers\HomeController@UserPassword')->name('userpasswordbyadmin');
  Route::post('/adminpanel/usereditrole',  'App\Http\Controllers\HomeController@UserEditRole')->name('userrolebyadmin');
  Route::post('/adminpanel/userGroupByadmin',  'App\Http\Controllers\HomeController@UserGroupByAdmin')->name('userGroupByadmin');

  Route::post('/adminpanel/Messages',  'App\Http\Controllers\HomeController@ToContacts')->name('toContacts');
  Route::post('/adminpanel/DeleteMessage',  'App\Http\Controllers\HomeController@DeleteContact')->name('DeleteMessage');

  Route::post('/adminpanel/Groups',  'App\Http\Controllers\HomeController@ToGroups')->name('toGroups');
  Route::post('/adminpanel/AddGroup',  'App\Http\Controllers\HomeController@AddGroup')->name('AddGroup');
  Route::post('/adminpanel/ToGroupDetails',  'App\Http\Controllers\HomeController@ToGroupDetails')->name('ToGroupDetails');
  Route::post('/adminpanel/EditGroupName',  'App\Http\Controllers\HomeController@EditGroupName')->name('EditGroupName');
  Route::post('/adminpanel/DeleteGroup',  'App\Http\Controllers\HomeController@DeleteGroup')->name('DeleteGroup');
  Route::post('/adminpanel/RejectSubject',  'App\Http\Controllers\HomeController@RejectSubject')->name('RejectSubject');
  Route::post('/adminpanel/AssignSubject',  'App\Http\Controllers\HomeController@AssignSubject')->name('AssignSubject');

  Route::post('/adminpanel/Subjects',  'App\Http\Controllers\HomeController@ToSubjects')->name('toSubjects');
  Route::post('/adminpanel/AddSubject','App\Http\Controllers\HomeController@AddSubject')->name('AddSubject');
  Route::post('/adminpanel/ToSubjectDetails',  'App\Http\Controllers\HomeController@ToSubjectDetails')->name('ToSubjectDetails');
  Route::post('/adminpanel/EditSubject',  'App\Http\Controllers\HomeController@EditSubject')->name('EditSubject');
  Route::post('/adminpanel/DeleteSubject',  'App\Http\Controllers\HomeController@DeleteSubject')->name('DeleteSubject');
  Route::post('/adminpanel/RejectTeacher',  'App\Http\Controllers\HomeController@RejectTeacher')->name('RejectTeacher');
  Route::post('/adminpanel/AssignTeacher',  'App\Http\Controllers\HomeController@AssignTeacher')->name('AssignTeacher');

  Route::post('/teacherpanel/Subjects',  'App\Http\Controllers\HomeController@TeacherSubjects')->name('TeacherSubjects');
  Route::post('/teacherpanel/Groups',  'App\Http\Controllers\HomeController@TeacherGroups')->name('TeacherGroups');
  Route::post('/teacherpanel/Students',  'App\Http\Controllers\HomeController@TeacherStudents')->name('TeacherStudents');
  Route::post('/teacherpanel/Grade',  'App\Http\Controllers\HomeController@TeacherGradeStudents')->name('TeacherGradeStudents');
  Route::post('/studentpanel/Grade',  'App\Http\Controllers\HomeController@StudentGrades')->name('StudentGrades');

  Route::post('/studentpanel/schedule/monday',  'App\Http\Controllers\HomeController@ScheduleMonday')->name('ScheduleMonday');
  Route::post('/studentpanel/schedule/tuesday',  'App\Http\Controllers\HomeController@ScheduleTuesday')->name('ScheduleTuesday');
  Route::post('/studentpanel/schedule/friday',  'App\Http\Controllers\HomeController@ScheduleFriday')->name('ScheduleFriday');
