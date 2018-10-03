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

use App\Classroom;

Route::get('/', function () {
    return view('index');
});

Route::resource('/classroom', 'ClassroomController');
Route::resource('/room', 'RoomController');
Route::resource('/schedule', 'ScheduleController');
Route::resource('/subject', 'SubjectController');
Route::resource('/teacher', 'TeacherController');
Route::resource('/weekday', 'WeekdayController');


Route::get('db', function(){
   return Classroom::find(1)->room;
});