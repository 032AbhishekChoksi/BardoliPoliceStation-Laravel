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
    Route::get('/helpline/add','App\Http\Controllers\backend\HelplineController@create')->name('admin.helpline.create');
    Route::post('/helpline/add','App\Http\Controllers\backend\HelplineController@store')->name('admin.helpline.create');
    Route::get('/helpline/edit/{id}','App\Http\Controllers\backend\HelplineController@edit')->name('admin.helpline.edit');
    Route::post('/helpline/edit/{id}','App\Http\Controllers\backend\HelplineController@update')->name('admin.helpline.update');
    Route::get('/helpline/soft-delete/{id}','App\Http\Controllers\backend\HelplineController@softdelete')->name('admin.helpline.softdelete');
    Route::get('/helpline/trash','App\Http\Controllers\backend\HelplineController@trash')->name('admin.helpline.trash');
    Route::get('/helpline/force-delete/{id}','App\Http\Controllers\backend\HelplineController@forceDelete')->name('admin.helpline.forcedelete');
    Route::get('/helpline/restore-delete/{id}','App\Http\Controllers\backend\HelplineController@restoreDelete')->name('admin.helpline.restoredelete');
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
