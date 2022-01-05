<?php

// JASAMARGA - DEVICES
Route::group([
  'as' => 'main.jasamarga.devices.',
  'prefix' => 'dashboard/jasamarga/devices',
  'namespace' => 'Backend\Main\JASAMARGA',
], function(){
  Route::get('status-done/{id}', 'DeviceController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'DeviceController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'DeviceController@enable')->name('enable');
  Route::get('disable/{id}', 'DeviceController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'DeviceController@status')->name('status');
  Route::get('delete/{id}', 'DeviceController@delete')->name('delete');
  Route::get('deleteall', 'DeviceController@deleteall')->name('deleteall');
  Route::resource('/', 'DeviceController')->parameters(['' => 'id']);
});

// JASAMARGA - DIVISIONS
Route::group([
  'as' => 'main.jasamarga.divisions.',
  'prefix' => 'dashboard/jasamarga/divisions',
  'namespace' => 'Backend\Main\JASAMARGA',
], function(){
  Route::get('status-done/{id}', 'DivisionController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'DivisionController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'DivisionController@enable')->name('enable');
  Route::get('disable/{id}', 'DivisionController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'DivisionController@status')->name('status');
  Route::get('delete/{id}', 'DivisionController@delete')->name('delete');
  Route::get('deleteall', 'DivisionController@deleteall')->name('deleteall');
  Route::resource('/', 'DivisionController')->parameters(['' => 'id']);
});

// JASAMARGA - USERS
Route::group([
  'as' => 'main.jasamarga.users.',
  'prefix' => 'dashboard/jasamarga/users',
  'namespace' => 'Backend\Main\JASAMARGA',
], function(){
  Route::get('status-done/{id}', 'UserController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'UserController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'UserController@enable')->name('enable');
  Route::get('disable/{id}', 'UserController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'UserController@status')->name('status');
  Route::get('delete/{id}', 'UserController@delete')->name('delete');
  Route::get('deleteall', 'UserController@deleteall')->name('deleteall');
  Route::resource('/', 'UserController')->parameters(['' => 'id']);
});
