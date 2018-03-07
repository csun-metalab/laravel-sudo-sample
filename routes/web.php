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

// auth routes
Route::get('/', 'AuthController@getLogin');
Route::get('login', 'AuthController@getLogin');
Route::post('login', 'AuthController@postLogin')->name('login');
Route::get('logout', 'AuthController@getLogout')->name('logout');

// authenticated home screen
Route::get('home', 'HomeController@index')->name('home');

// exit sudo mode
Route::get('exit_sudo', '\CSUNMetaLab\Sudo\Http\Controllers\SudoController@exitSudoMode')
   ->name('sudo.exit');