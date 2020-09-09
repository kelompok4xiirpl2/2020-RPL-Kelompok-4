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
route::get('/',function(){
	return view('auth.login');
});

Route::group(['middleware' => ['web','auth','back']],function(){
Route::group(['middleware' => ['roles:1']],function(){

Route::get('/admin','HomeController@index');

//admin


Route::get('/admin/announcement','AnnouncementController@index');
Route::get('admin/announcement/create','AnnouncementController@create');
Route::post('admin/announcement/create','AnnouncementController@store');
Route::get('admin/announcement/{id}/delete','AnnouncementController@delete');
Route::get('admin/announcement/{id}/edit','AnnouncementController@edit');
Route::post('admin/announcement/edit','AnnouncementController@update');



	
Route::get('/admin/class','ClassController@index');
Route::get('admin/class/create','ClassController@create');
Route::post('admin/class/create','ClassController@store');
Route::get('admin/class/{id}/delete','ClassController@delete');





Route::get('admin/question/table','TuestionController@index');
Route::post('admin/question/{name}','QuestionController@store');
Route::get('admin/question/{id}/answer','TuestionController@create');
Route::post('admin/question/{id}/answer','TuestionController@store');
Route::get('admin/question/{id}/delete','TuestionController@delete');



});
Route::group(['middleware' => ['roles:2']],function(){
Route::get('/students','SiswaController@index');
Route::get('/students/announcement','SiswaController@index');
Route::get('students/myquestion/{id}/delete','MyquestionController@delete');

Route::get('/students/question/{name}','QuestionController@index');
Route::post('/students/question/{name}','QuestionController@store');
Route::get('/students/question/{id}/viewanswer','TuestionController@detail_answer');

});});





Route::get('/home','HomeController@index');
Route::get('admin/announcement/{id}/detail','AnnouncementController@detail');
Route::get('/students/announcement/{id}/detail','AnnouncementController@detail');
Route::get('/myquestion','MyquestionController@index');
Route::get('admin/question/{id}/viewanswer','MyquestionController@index');
