<?php


Route::get('/', 'CollegeCalcController@index');
Route::get('/calcCost', 'CollegeCalcController@calcCost');

/*static pages*/
Route::view('/about', 'about');
Route::view('/contact', 'contact');