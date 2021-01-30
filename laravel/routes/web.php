<?php

Route::get('/', 'BrandController@index') -> name('brand-index');
Route::get('/brand/{id}', 'BrandController@show') -> name('brand-show');
Route::get('/employee', 'EmployeeController@index')  -> name('employee-index');
Route::get('/employees/{id}', 'EmployeeController@show')  -> name('employee-show');
Route::get('/location', 'LocationController@index')  -> name('location-index');
Route::get('/locations/{id}', 'LocationController@show')  -> name('location-show');
