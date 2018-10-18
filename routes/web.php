<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/p3', 'CollegeCalcController@index');