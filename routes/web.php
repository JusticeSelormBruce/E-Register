<?php


use Illuminate\Support\Facades\Artisan;
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

// Route::get('/', 'MarketController@index');
Route::get('run', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    return back();
});
Auth::routes();
Route::post('/user1-auth', 'MainController@User1Auth');
// Route::get('/', 'HomeController@index');
Route::get('/', 'HomeController@index')->name('home');
//register user as admin
Route::get('register-user', 'HomeController@registrationIndex');
Route::post('create-user-account', 'HomeController@createUserAccount');
// main controller
Route::get('dashboard', 'MainController@dashboard');
Route::get('admin/assign-privilege-index', 'MainController@AssignPrivilegeIndex');
Route::get('admin/assign-privilege-form', 'MainController@AssignPrivilegeForm');
Route::post('admin/assign-privilege', 'MainController@AssignPrivilege');
Route::post('admin/get-user-roles', 'MainController@getUserRoles')->name('get.user.roles');
Route::get('admin/user-accounts-index', 'MainController@UserAccountsIndex');
Route::post('admin/register-user', 'MainController@RegisterUser');



//Reset User Password Route Start
Route::get('admin/reset-password', 'MainController@resetPasswordIndex');
Route::post('reset-password', 'MainController@resetPassword');

//Change User Password
Route::get('change-password-index', 'MainController@changePasswordIndex');
Route::post('change-password', 'MainController@changePassword');



//DataController Logic Start
Route::post('electoral-area-details-store','DataController@storeElectoralAreaDetails')->name('e.a.d.store');
Route::get('electoral-area-list','DataController@electoralAreaList')->name('electoral.area.list');
Route::post('polling-station-details-store','DataController@storePollingStationDetails')->name('p.s.d.store');
Route::get('polling-station-list','DataController@pollingStationList')->name('polling.station.list');
Route::get('general-ea-list',function(){
    return view('admin.data.ea.list');
});
Route::post('/datasheet','DataController@storePollingStationList');
Route::get('view-collection',function(){
    return view('admin.data.collection');
});
//DataController Logic End

