<?php

use Illuminate\Support\Facades\Auth;
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

Route::match(['get','post'],'/login', 'AdminController@login')->name('admin.login');

Route::group(['middleware'=>['auth']], function (){
    Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/admin/settings', 'AdminController@adminSettings')->name('admin.settings');

    Route::resource('employees', 'EmployeeController');
    Route::resource('employeeCategories', 'CategoryController');

    Route::get('/settings', 'SettingController@settings')->name('settings');
    Route::post('/settings/update', 'SettingController@updateSettings')->name('update.settings');

    Route::get('/stations', 'SettingController@stations')->name('stations');
    Route::post('/stations/edit', 'SettingController@stationsEdit')->name('station.edit');
    Route::post('/station', 'SettingController@newStation')->name('station.store');

    Route::post('/fuel', 'SettingController@newFuel')->name('fuel');
    Route::get('/fuel/delete/{id}', 'SettingController@deleteFuel')->name('fuel.delete');

    Route::get('/tickets', 'SettingController@ticket')->name('tickets');
    Route::post('/ticket', 'SettingController@storeTicket')->name('ticket.store');
    Route::post('/ticket/update', 'SettingController@updateTicket')->name('ticket.update');
    Route::get('/ticket/view/{id}', 'SettingController@viewTicket')->name('admin.viewTicket');

    Route::get('/settings', 'SettingController@settings')->name('settings');
    Route::post('/settings/update', 'SettingController@updateSettings')->name('update.settings');

    Route::get('/admin/check-pwd', 'AdminController@chkPassword');
    Route::post('/admin/update-password', 'AdminController@updatePassword')->name('update.password');
});

//Route::get('/dashboard', 'PagesController@index');

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*======================Display Local Government of each state Route==================================*/
Route::get('/state/{id}', 'EmployeeController@getLgas');


Route::get('/logout', 'AdminController@logout')->name('logout');
