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


Auth::routes(['verify' => true]);

//BackOffice
Route::group(['middleware'=>['auth'],'as', 'backoffice.'], function(){
		//Route::get('role','RoleController@index')->name('role.index');
	Route::resource('role','RoleController');


});



/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('demo', function () {
    return view('theme.backoffice.pages.demo');
});



Route::get('/home', 'HomeController@index')->name('home');
*/