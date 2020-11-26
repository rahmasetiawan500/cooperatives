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
    return view('welcome');
});
php 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {


        Route::resource('member', 'MemberController');
    });
Route::resource('registration', 'RegistrationController');
Route::resource('simpanan', 'SimpananController');
Route::resource('pinjaman', 'PinjamanController');
Route::get('/registration/create/success', 'RegistrationController@success')->name('registration.success');
Route::get('/home/simpanan/success', 'SimpananController@success')->name('simpanan.success');
Route::get('/home/pinjaman/success', 'PinjamanController@success')->name('pinjaman.success');
