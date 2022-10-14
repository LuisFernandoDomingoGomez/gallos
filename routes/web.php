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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	//Navbar and Sidebar
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

	//Registro de partcipantes
	Route::resource('gallos', App\Http\Controllers\GalloController::class)->middleware('auth');
	Route::resource('equipos', App\Http\Controllers\EquipoController::class)->middleware('auth');
	
	//Genenarción de PDF
	Route::get('equipo/pdf', 'App\Http\Controllers\EquipoController@pdf')->name('equipo.pdf');
	Route::get('gallo/pdf', 'App\Http\Controllers\GalloController@pdf')->name('gallo.pdf');

	//Rondas de peleas
	Route::resource('ronda1peleas', App\Http\Controllers\Ronda1peleaController::class)->middleware('auth');


