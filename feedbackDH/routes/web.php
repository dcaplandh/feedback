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

Route::get('/', function (){
    return view('home');
});
Route::get('/alumnos','StudentController@index');
Route::get('/cursos','CourseController@index');
Route::get('/comisiones','CommissionController@index');
Route::get('/etapas','StageController@index');
Route::get('/temas','TopicController@index');
Route::get('/feedback','FeedbackController@index');
