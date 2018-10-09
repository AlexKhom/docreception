<?php

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

Route::prefix('admin')->middleware('role:superadministrator|administrator')->group(function () {
    Route::get('/', 'Admin\AdminController@dashboard')->name('dashboard');
    /*
    Route::resource('/users', 'UserController');
    Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
    Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
    Route::resource('/posts', 'PostController');
    */
});

Route::group(['prefix'=>'reception', 'namespace'=>'Reception', 'middleware'=>['auth']], function(){
    Route::resource('/', 'HomeController');
});

Route::get('/', 'HomeController@index')->name('site.index');


