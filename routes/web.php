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

Route::group(['middleware' => 'auth'], function() {

	Route::get('/dashboard', function(){
		return view('dashboard');
	})->name('dashboard');
	
	Route::get('users', function () {
		$users  = App\User::all();
	    return view('users.index', compact('users'));
	})->name('users.index');

	Route::get('abogados', function () {
	  $lawyers = App\Abogado::all();
	  return view('abogados.index', compact('lawyers'));
    })->name('abogados.index');

    Route::get('clientes', function () {
	    $clientes = App\Cliente::all();
	    return view('clientes.index', compact('clientes'));
	})->name('clientes.index');
});

Auth::routes();



/*
Route::get('abogados', function () {
	
	$lawyers = App\Abogado::all();
	
	return view('abogados', compact('lawyers'));
});

Route::get('users', function () {
	$users  = App\User::all();
	return view('users', compact('users'));
});

Route::get('clientes', function () {
	$clientes  = App\Cliente::all();
	return view('clientes', compact('clientes'));
});
*/




Auth::routes();

Route::get('/home', 'HomeController@index');
