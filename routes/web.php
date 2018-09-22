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

Route::group(['middleware' => 'auth'], function () {
	Route::get('/admin', 'AdminController@index')->name('admin');
	Route::get('/tracks', 'TracksController@index')->name('tracks.index');
	Route::resource('areas', 'AreasController');
	Route::get('child_areas/{post_id}', 'ChildAreasController@index')->name('child_areas.index');
	Route::get('child_areas/create/{post_id}', 'ChildAreasController@create')->name('child_areas.create');
	Route::post('child_areas', 'ChildAreasController@store')->name('child_areas.store');
	Route::get('child_areas/{post_id}/edit', 'ChildAreasController@edit')->name('child_areas.edit');
	Route::delete('child_areas/{post_id}', 'ChildAreasController@destroy')->name('child_areas.destroy');
	// Route::resource('child_areas', 'ChildAreasController');

	// Route::get('stations/{post_id}', 'StationsController@index')->name('stations.index');
	// Route::get('exits/{station_id}', 'ExitsController@index')->name('exits.index');
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
