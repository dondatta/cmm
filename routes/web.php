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

Route::get('subscribe', function () {
    return view('subscribe');
});

Route::get('/telegram', function () {
    return view('telegram');
})->middleware('auth');
Auth::routes();

Route::resource('ranks','RankController');

Route::get('logout', 'Auth\LoginController@logout')->middleware('auth');
Route::get('profile', 'UserController@profile')->middleware('auth');
Route::get('profilebg', 'UserController@profilebg')->middleware('auth');
Route::post('profile', 'UserController@update_avatar');
Route::post('profilebg', 'UserController@update_cover');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('profiles', 'ProfileController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
