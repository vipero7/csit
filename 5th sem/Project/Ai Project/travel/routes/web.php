<?php
use System\Library\Route;

// Route for Customers

// HOME CONTROLLER

Route::get('', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::get('user-preference', 'HomeController@rangeslider');

Route::get('get-places', 'CalculationController@calculate');



// Admin

Route::get('admin/login', 'Admin\LoginController@login');

Route::get('admin/logout', 'Admin\LoginController@logout');

Route::get('admin/home', 'Admin\HomeController@index');

Route::get('admin/places/add', 'Admin\PlacesController@add');

Route::get('admin/places/list', 'Admin\PlacesController@index');

Route::get('admin/places/edit/{id}', 'Admin\PlacesController@edit');

Route::get('admin/places/delete/{id}', 'Admin\PlacesController@delete');






