<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::resource('/transaction','TransactionController');

Route::post('/menutype/store', 'MenuTypeController@store')->middleware('auth');
Route::get('/menutype', 'MenuTypeController@index')->middleware('auth');
Route::get('/menutype/store', 'MenuTypeController@store')->middleware('auth');

Route::get('/overview/{id}/delete/type', 'OverviewController@removetype')->middleware('auth');
Route::get('/overview/{id}/delete', 'OverviewController@destroy')->middleware('auth');
Route::get('/overview/{id}/show', 'OverviewController@show')->middleware('auth');
Route::post('/overview/{id}/edit', 'OverviewController@edit')->middleware('auth');
Route::get('/overview', 'OverviewController@index')->middleware('auth');

Route::get('/addmenu', 'InventoryController@index')->middleware('auth');
Route::post('/addmenu', 'InventoryController@store')->middleware('auth');
Route::get('/', 'OrderController@index')->middleware('auth');
