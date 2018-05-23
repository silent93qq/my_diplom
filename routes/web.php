<?php

Route::get('/', function () {return view('layouts.app');});

Route::get('/logind','LoginController@index')->name('logind');
Route::post('/logind', 'LoginController@login');

Route::get('/logoutd','LogoutController@out')->name('logoutd');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('phones', 'PhoneController');

Route::resource('students', "StudentController");

Route::resource('profile','ProfileController');

Route::post('/profile', "ProfileController@updateAva");

Route::get('history','HistoryStudentController@index')->name('history');

Route::resource('tasks', 'TaskController');