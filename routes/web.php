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

Route::group(['prefix' => 'admin','middleware'=>'backendguard'],function(){
    Route::get('/dashboard','App\Http\Controllers\backend\DashboardController@index')->name('admin.dashboard');
    Route::get('/logout','App\Http\Controllers\backend\DashboardController@logout')->name('admin.logout');
});

Route::get('admin','App\Http\Controllers\backend\LoginController@index');
Route::get('admin/login','App\Http\Controllers\backend\LoginController@index')->name('admin.login');
Route::post('admin/login','App\Http\Controllers\backend\LoginController@login')->name('admin.login');
Route::get('admin/create','App\Http\Controllers\backend\LoginController@store');

//Route::get('helpline','App\Http\Controllers\backend\HelplineController@index');

// Route::prefix('/admin')->group(function () {
//     Route::get('/dashboard','App\Http\Controllers\backend\DashboardController@index')->name('admin.dashboard');
//     Route::get('/login','App\Http\Controllers\backend\LoginController@index')->name('admin.login');
//     Route::post('/login','App\Http\Controllers\backend\LoginController@login')->name('admin.login');
// });
