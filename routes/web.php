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
    //return redirect('/crm/project/log');
    return view('welcome');
})->name('welcome');

Route::group(['prefix' => 'crm', 'namespace'=> 'Crm'], function () {
    Route::get('/project/log', ['uses' => 'ProjectLogController@index']);
});

Route::group(['prefix' => 'base', 'namespace'=> 'Base'], function () {
    Route::get('/fileupload', ['uses' => 'FileUploadController@index']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
