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
    return view('auth.login');
});


Route::view('/home', 'home')->middleware('auth')->name('home');
Route::group(['middleware' => 'auth:admin'], function () {
});

Auth::routes();
// -----------------------------login-----------------------------------------
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@authenticate');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// ------------------------------register---------------------------------------
Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@register')->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@storeUser')->name('register');

// -----------------------------forget password ------------------------------
Route::get('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@getEmail')->name('forget-password');
Route::post('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@postEmail')->name('forget-password');

Route::get('reset-password/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@getPassword');
Route::post('reset-password', 'App\Http\Controllers\Auth\ResetPasswordController@updatePassword');

// -----------------------------login facebook ------------------------------
Route::get('/redirect', 'App\Http\Controllers\FacebookController@redirect');
Route::get('/callback', 'App\Http\Controllers\FacebookController@callback');

// -----------------------------route infomation staff ------------------------------
Route::get('form/information-staff/new','App\Http\Controllers\informationStaffController@viewInformationStaff')->name('form/information-staff/new');

// -----------------------------route report ------------------------------
Route::get('report/new','App\Http\Controllers\reportController@viewReport')->name('report/new');

// -----------------------------route group for Admins ------------------------------
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function(){

    Route::get('/', 'AdminPageController@home')->name('admin.home');

    Route::get('/members', 'AdminPageController@members')->name('admin.members');

    Route::get('/member', 'AdminPageController@member')->name('admin.member');

    Route::get('/properties', 'AdminPageController@properties')->name('admin.properties');

    Route::get('/property', 'AdminPageController@property')->name('admin.property');

    Route::get('/transactions', 'AdminPageController@transactions')->name('admin.transactions');

    Route::get('/transaction', 'AdminPageController@transaction')->name('admin.transaction');

    Route::get('/activate', 'AdminPageController@activate')->name('admin.activate');

    Route::get('/notifications', 'AdminPageController@notifications')->name('admin.notifications');

});
// -----------------------------route group for Partners ------------------------------
Route::group(['middleware' => ['auth', 'partners'], 'prefix' => 'partners'], function(){

    Route::get('/', 'PartnersPageController@home')->name('partners.home');

    Route::get('/profile', 'PartnersPageController@profile')->name('partners.profile');

    Route::get('/notifications', 'PartnersPageController@notifications')->name('partners.notifications');

    Route::get('/properties', 'PartnersPageController@properties')->name('partners.properties');

    Route::get('/property', 'PartnersPageController@property')->name('partners.property');

    Route::get('/adverts', 'PartnersPageController@adverts')->name('partners.adverts');

    Route::get('/advert', 'PartnersPageController@advert')->name('partners.advert');

    Route::get('/transactions', 'PartnersPageController@transactions')->name('partners.transactions');

});

// -----------------------------route group for users -----------------P-------------
Route::group(['middleware' => ['auth', 'users'], 'prefix' => 'users'], function(){

    Route::get('/', 'UsersPageController@home')->name('users.home');

    Route::get('/profile', 'UsersPageController@profile')->name('users.profile');

    Route::get('/reservations', 'UsersPageController@reservations')->name('users.reservations');

    Route::get('/reservation', 'UsersPageController@reservation')->name('users.reservation');

    Route::get('/notifications', 'UsersPageController@notifications')->name('users.notifications');

    
});
