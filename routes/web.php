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
    return view('welcome');
});



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('logout', 'HomeController@logout')->name('logout');
Route::get('signin/{roleid}', 'HomeController@signin')->name('signin');
Route::get('admin/dashboard', 'Admin\AdminController@index')->name('admin.dashboard');
Route::get('post_registration', 'Admin\AdminController@post_registration')->name('post_registration');
Route::resource('ajax', 'AjaxController');
Route::get('pincode/{pincode}', 'AjaxController@pincodedetail')->name('pincode');



