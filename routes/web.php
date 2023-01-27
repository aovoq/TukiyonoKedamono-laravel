<?php

use Illuminate\Support\Facades\DB;
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
   $menus = DB::table('menus')->take(4)->get();
   return view('pages.home', ['menus' => $menus]);
});

Route::get('/event', 'App\Http\Controllers\EventController@index')->name('event.index');

Route::get('/menu', 'App\Http\Controllers\MenuController@index')->name('menu.index');

Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contact.index');
Route::post('/contact/confirm', 'App\Http\Controllers\ContactController@confirm')->name('contact.confirm');
Route::post('/contact/thanks', 'App\Http\Controllers\ContactController@send')->name('contact.send');

Route::post('/schedule-add', 'App\Http\Controllers\ScheduleController@scheduleAdd')->name('schedule-add');
Route::post('/schedule-get', 'App\Http\Controllers\ScheduleController@scheduleGet')->name('schedule-get');
Route::get('/calendar', function () {
   return view('calendar');
});



Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard.index');
Route::post('/dashboard/menu/create', 'App\Http\Controllers\DashboardController@menu_create')->name('dashboard.menu_create');
Route::delete('/dashboard/menu/delete', 'App\Http\Controllers\DashboardController@menu_delete')->name('dashboard.menu_delete');
