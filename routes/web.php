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
    return view('/Assets.index');
});
//Route::resource('/assets','AssetsController');



//Route::get("/assets",'Asset_locationController@index');
Route::post("/assets",'AssetsController@store');



Route::resource('/models','Asset_modelController');
Route::resource('/location','Asset_locationController');
Route::resource('supervisors','SupervisorController');
Route::resource('depreciation_historys','Depreciation_historyController');
Route::resource('/services','Assets_serviceController');
Route::resource('/depreciation','Depreciation_typeController');
Route::resource('classes','Assets_classController');
Route::resource('/castodian','Assets_castodianController');
Route::resource('/vendors','Assets_vendorController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
