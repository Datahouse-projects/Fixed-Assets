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
Route::resource('/assets','AssetsController');
Route::resource('/models','Asset_modelController');
Route::resource('/location','Asset_locationController');
Route::resource('supervisors','SupervisorController');
Route::resource('depreciation_historys','Depreciation_historyController');
Route::resource('services','Asset_serviceController');
Route::resource('depreciation_types','Depreciation_typeController');
Route::resource('classes','Asset_classController');
Route::resource('castodians','Asset_castodianController');
Route::resource('vendors','Asset_vendorController');