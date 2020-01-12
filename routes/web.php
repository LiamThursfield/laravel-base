<?php

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

Auth::routes([
    'confirm'   => false,
    'register'  => true,
    'reset'     => true,
    'verify'    => false
]);

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/about', 'AdminController@about')->name('admin.about');
