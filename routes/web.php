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



Route::get('/', 'App\Http\Controllers\PagesController@home');

Route::get('/login', 'App\Http\Controllers\PagesController@login');
Route::get('/register', 'App\Http\Controllers\PagesController@register');
Route::get('/admin', 'App\Http\Controllers\PagesController@admin');
Route::get('/changePassword', 'App\Http\Controllers\ChangePasswordController@changePasswordGet');
Route::put('/changePasswordPut', 'App\Http\Controllers\ChangePasswordController@changePasswordPut');
Auth::routes();
Route::get('/home', 'App\Http\Controllers\PagesController@home');
Route::resource('/iskustva', 'App\Http\Controllers\IskustvaController');
Route::resource('/pitanja', 'App\Http\Controllers\PitanjaController');
Route::resource('/doktori', 'App\Http\Controllers\DoktorController');
Route::resource('/odgovori', 'App\Http\Controllers\OdgovoriController');
Route::resource('/users', 'App\Http\Controllers\UsersController');
Route::get('/admin/korisnici','App\Http\Controllers\UsersController@index');
Route::get('/admin/doktori', 'App\Http\Controllers\AdminController@getDoktori');
Route::get('/admin/iskustva', 'App\Http\Controllers\AdminController@getIskustva');
Route::delete('/admin/iskustva/{id}/delete', 'App\Http\Controllers\AdminController@deleteIskustvo');
Route::delete('/admin/pitanja/{id}/delete', 'App\Http\Controllers\AdminController@deletePitanje');
Route::get('/admin/pitanja', 'App\Http\Controllers\AdminController@getPitanja');
Route::get('/admin/korisnici/{id}', 'App\Http\Controllers\AdminController@editKorisnikView');
Route::post('/admin/korisnici/create', 'App\Http\Controllers\AdminController@createKorisnik');
Route::post('/admin/doktori/create', 'App\Http\Controllers\AdminController@createDoktor');
Route::put('/admin/doktori/update/{id}', 'App\Http\Controllers\AdminController@updateDoktor');
Route::get('/admin/doktori/update/{id}', 'App\Http\Controllers\AdminController@updateDoktorView');
Route::get('/changeUsername/{id}', 'App\Http\Controllers\ChangeCredsController@getChangeUsername');
Route::put('/changeUsernamePut', 'App\Http\Controllers\ChangeCredsController@changeUsername');
Route::get('/changeEmail/{id}', 'App\Http\Controllers\ChangeCredsController@getChangeEmail');
Route::put('/changeEmailPut', 'App\Http\Controllers\ChangeCredsController@changeEmail');
Route::get('pitanja/edit/{id}', 'App\Http\Controllers\PitanjaController@findPitanje');
Route::put('pitanja/update/{id}', 'App\Http\Controllers\PitanjaController@updatePitanje');
