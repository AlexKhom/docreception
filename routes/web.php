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

    Route::resource('/users', 'Admin\UserController');
    Route::resource('/roles', 'Admin\RoleController', ['except' => 'destroy']);
    /*
    Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);

    Route::resource('/posts', 'PostController');
    */
});
/*
Route::group(['prefix'=>'reception', 'namespace'=>'Reception', 'middleware'=>['auth']], function(){
    Route::resource('/', 'HomeController');
});
*/
Route::prefix('reception')->middleware('role:doctor|manager|user')->group(function (){
    Route::get('/', 'Reception\HomeController@index');
});

Route::get('/', 'HomeController@index')->name('site.index');


