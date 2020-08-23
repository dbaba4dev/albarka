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

    Route::resource('employees', 'EmployeeController');
    Route::resource('employeeCategories', 'CategoryController');
});

//Route::get('/dashboard', 'PagesController@index');

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*======================Display Local Government of each state Route==================================*/
Route::get('/state/{id}', 'EmployeeController@getLgas');


Route::get('/logout', 'AdminController@logout')->name('logout');
