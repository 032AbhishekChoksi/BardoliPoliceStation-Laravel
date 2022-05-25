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

Route::get('admin/login','App\Http\Controllers\backend\LoginController@index')->name('admin.login');
Route::post('admin/login','App\Http\Controllers\backend\LoginController@login')->name('admin.login');

// Route::prefix('/admin')->group(function () {
//     Route::get('/dashboard','App\Http\Controllers\backend\DashboardController@index')->name('admin.dashboard');
//     Route::get('/login','App\Http\Controllers\backend\LoginController@index')->name('admin.login');
//     Route::post('/login','App\Http\Controllers\backend\LoginController@login')->name('admin.login');
// });
