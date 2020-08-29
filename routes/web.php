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
Route::get('/home','HomeController@index')->middleware('auth');

Route::get('/','AnnouncementController@index')->middleware('auth');
Route::get('/announcement/{id}/detail','AnnouncementController@detail')->middleware('auth');

Route::get('/announcement/create','AnnouncementController@create')->middleware('auth');
Route::post('/announcement/create','AnnouncementController@store')->middleware('auth');

Route::get('/announcement/{id}/delete','AnnouncementController@delete')->middleware('auth');

Route::get('/announcement/{id}/edit','AnnouncementController@edit')->middleware('auth');
Route::post('/announcement/{id}/edit','AnnouncementController@update')->middleware('auth');



Route::get('/class','ClassController@index')->middleware('auth');	

Route::get('/class/create','ClassController@create')->middleware('auth');
Route::post('/class/create','ClassController@store')->middleware('auth');

Route::get('/class/{id}/delete','ClassController@delete')->middleware('auth');

Route::get('/question','QuestionController@index')->middleware('auth');
Route::post('/question','QuestionController@store')->middleware('auth');


Route::get('/question/table','TuestionController@index')->middleware('auth');

Route::get('/question/{id}/answer','TuestionController@create')->middleware('auth');

Route::post('/question/{id}/answer','TuestionController@store')->middleware('auth');

Route::get('/question/{id}/viewanswer','TuestionController@detail_answer')->middleware('auth');

Route::get('/question/{id}/delete','TuestionController@delete')->middleware('auth');