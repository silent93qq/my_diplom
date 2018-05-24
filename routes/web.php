<?php

Route::get('/', function () {
    $tasks = \App\Task::query()->get();
    return view('layouts.app',compact('tasks'));});


Route::get('/login','LoginController@index')->name('login');
Route::post('/login', 'LoginController@login');

Route::get('/logout','LogoutController@out')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('phones', 'PhoneController');

Route::resource('students', "StudentController");

Route::resource('profile','ProfileController');

Route::post('/profile', "ProfileController@updateAva");

Route::get('history','HistoryStudentController@index')->name('history');

Route::resource('tasks', 'TaskController');

Route::resource('places','PlaceController');