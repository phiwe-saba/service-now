<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome', 'App\Http\Controllers\HomeController@index')->name('welcome');

/* Department Routes */
Route::get('admin.department.index', 'App\Http\Controllers\DepartmentController@index')->name('admin.department.index');
Route::get('admin.department.create', 'App\Http\Controllers\DepartmentController@create')->name('admin.department.create');
Route::post('admin.department.index', 'App\Http\Controllers\DepartmentController@store')->name('admin.department.store');

/* Status Routes */
Route::get('admin.status.index', 'App\Http\Controllers\StatusController@index')->name('admin.status.index');
Route::get('admin.status.create', 'App\Http\Controllers\StatusController@create')->name('admin.status.create');
Route::post('admin.status.index', 'App\Http\Controllers\StatusController@store')->name('admin.status.store');

Route::get('admin.dashboard', 'App\Http\Controllers\AdminController@dashboard')->name('admin.dashboard');

Route::get('auth.register', 'App\Http\Controllers\RegisterController@register')->name('auth.register');
Route::post('auth.register', 'App\Http\Controllers\RegisterController@store')->name('auth.store');

Route::get('ticket.index', 'App\Http\Controllers\TicketController@index')->name('ticket.index');
Route::get('ticket.create', 'App\Http\Controllers\TicketController@create')->name('ticket.create');
Route::post('ticket.store', 'App\Http\Controllers\TicketController@store')->name('ticket.store');