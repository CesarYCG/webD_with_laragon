<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tareaController;
use App\Http\Controllers\EntregaController;
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
})->middleware('welcome');

Route::resource('entregas', EntregaController::class);

Route::get('saludos', function($nombre="xezander"){
	return "Hola " .$nombre;
});

Route::get('admin', function(){
	return "Asi que eres acmin >:O";
})->middleware('admin'); /*Se aplica esto al middleware*/

Route::middleware(['admin'])->group(function(){
	Route::get('admin2', function(){
		return view('layouts.admin');
	});
	Route::resource('admintareas', tareaController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('cal', [App\Http\Controllers\HomeController::class, 'cal'])->name('cal');
