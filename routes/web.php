<?php

use App\Http\Controllers\NotificationController;

Auth::routes();

Route::get('/', function () { return view('pages.frontend.index'); });
Route::get('/home', 'HomeController@index')->name('home');

Route::get('test-pusher', function () {
    event(new App\Events\NotificationEvent('Test 3'));
    return "Event has been sent!";
});

Route::get('/send-notification', [NotificationController::class, 'sendOfferNotification']);


Route::get('/dashboard', 'Backend\DashboardController@index')->name('dashboard.index');
Route::get('/dashboard/notifications', 'Backend\DashboardController@notification')->name('dashboard.notification');
Route::get('/dashboard/documentations', 'Backend\DashboardController@documentation')->name('dashboard.documentation');
Route::get('/dashboard/file-manager', 'Backend\DashboardController@filemanager')->name('dashboard.file-manager');
Route::get('/dashboard/logout', 'Backend\DashboardController@logout')->name('dashboard.logout');
Route::get('/lang/{language}', 'LocalizationController@switch')->name('localization.switch');

// SYSTEM
require __DIR__.'/backend/system/general.php';
require __DIR__.'/backend/system/dummy.php';
require __DIR__.'/backend/system/management.php';

// MAIN
require __DIR__.'/backend/main/jasamarga.php';
