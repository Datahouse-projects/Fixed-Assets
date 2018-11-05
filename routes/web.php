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
    return view('home');
});
//Route::resource('/assets','AssetsController');

//return view('/Assets.index');

//Route::get("/assets",'AssetsController@show');
///Route::post("/assets",'AssetsController@store');

//Route::get('/Assets.show', 'AssetsController@show');


Route::resource('/models','Asset_modelController');

Route::resource('supervisors','SupervisorController');
Route::resource('depreciation_historys','Depreciation_historyController');
Route::resource('/services','Assets_serviceController');
Route::resource('/depreciation','Depreciation_typeController');
Route::resource('classes','Assets_classController');
Route::resource('/castodian','Assets_castodianController');
//Route::resource('/vendors','Assets_vendorController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'AssetsController@index')->name('about');

//Route::get('/Vendors/index', 'Assets_vendorController@index')->name('vendor');;
Route::get('/Class/index', 'Assets_classController@index')->name('category');
//Route::get('/Assets/show', 'AssetsController@store')->name('assets');

Route::get('/Deprection/index', 'Depreciation_typeController@show')->name('dep');

Route::get('/Depreciation/index', 'Depreciation_typeController@index')->name('Depreciation');
Route::get('/Depreciation/show', 'Depreciation_typeController@show');
Route::resource('assets','AssetsController');

Route::resource('vendors','Assets_vendorController');
//Route::get('/Vendors.show', 'Assets_vendorController@show');
Route::post("/vendors",'Assets_vendorController@store');
Route::get("/vendors",'Assets_vendorController@create');

Route::resource('locations','Asset_locationController');

Route::post('/locations', 'Asset_locationController@store');
Route::get('/locations', 'Asset_locationController@create');



Route::get('/Class/create', 'Assets_classController@create')->name('category');


