<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
//register user as admin
Route::get('register-user','HomeController@registrationIndex');
Route::post('create-user-account','HomeController@createUserAccount');

// main controller
Route::get('dashboard', 'MainController@dashboard');
Route::get('admin/assign-privilege-index', 'MainController@AssignPrivilegeIndex');
Route::get('admin/assign-privilege-form', 'MainController@AssignPrivilegeForm');
Route::post('admin/assign-privilege', 'MainController@AssignPrivilege');
Route::post('admin/get-user-roles', 'MainController@getUserRoles')->name('get.user.roles');
Route::get('admin/user-accounts-index', 'MainController@UserAccountsIndex');
Route::post('admin/register-user', 'MainController@RegisterUser');
Route::post('/admin/get-user-classes','LecturerController@getUserclasses');
Route::post('/admin/assign-classes','LecturerController@Assignclass');


//Reset User Password Route Start
Route::get('admin/reset-password', 'MainController@resetPasswordIndex');
Route::post('reset-password', 'MainController@resetPassword');

//Change User Password
Route::get('change-password-index', 'MainController@changePasswordIndex');
Route::post('change-password', 'MainController@changePassword');

Route::get('/admin/classroom/index','AdminController@classroomIndex');
Route::get('/admin/register/index','AdminController@registerIndex');
Route::get('/admin/student/index','AdminController@studentIndex');
Route::post('create-classroom','AdminController@storeClassDetails');
Route::post('edit-classroom','AdminController@editClassDetails');
Route::get('delete-classroom/{id}','AdminController@deleteClassroomDetails')->name('classroom.delete');
Route::post('/upload-student-list','AdminController@StoreStudentDetails');
Route::get('view-class-list/{id}','AdminController@classList')->name('class.view');
Route::get('assign-class-index','LecturerController@assignClassIndex');
Route::get('mark-register-index/{id}','LecturerController@regiterForm')->name('register.form');
Route::post('/marrk-register','LecturerController@markRegister');

