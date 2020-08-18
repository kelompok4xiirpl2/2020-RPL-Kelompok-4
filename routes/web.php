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


Auth::routes();

Route::get('/','AnnouncementController@index')->middleware('auth');
Route::get('/announcement/{id}/detail','AnnouncementController@detail')->middleware('auth');

Route::get('/announcement/create','AnnouncementController@create')->middleware('auth');
Route::post('/announcement/create','AnnouncementController@store')->middleware('auth');

Route::get('/announcement/{id}/delete','AnnouncementController@delete')->middleware('auth');

Route::get('/announcement/{id}/edit','AnnouncementController@edit')->middleware('auth');
Route::post('/announcement/{id}/edit','AnnouncementController@update')->middleware('auth');