<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contact.index');
Route::post('/contact/confirm', 'App\Http\Controllers\ContactController@confirm')->name('contact.confirm');
Route::post('/contact/thanks', 'App\Http\Controllers\ContactController@send')->name('contact.send');

Route::post('/schedule-add', 'App\Http\Controllers\ScheduleController@scheduleAdd')->name('schedule-add');
Route::post('/schedule-get', 'App\Http\Controllers\ScheduleController@scheduleGet')->name('schedule-get');
Route::get('/calendar', function () {
    return view('calendar');
});
