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
    return view('auth.login');
});
//Route::get('/empleados','EmpleadosController@index');
//Route::get('/empleado/create','EmpleadosController@create');
Route::resource('empleados', 'EmpleadosController');
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
