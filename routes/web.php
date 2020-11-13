<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

// Route::get('/','display@index');
Route::get('/', 'TodoController@index')->name("welcome");

// Route::middleware('auth')->group(function(){

	Route::post('/todo/create', 'TodoController@create');
	Route::get('/todo/{id}/edit', 'TodoController@edit')->name("todo.edit");
	Route::post('/todo/{id}/update', 'TodoController@update')->name("todo.update");
	Route::post('/todo/{id}/completed', 'TodoController@completed')->name("todo.completed");
	Route::post('/todo/{id}/uncompleted', 'TodoController@uncompleted')->name("todo.uncompleted");

// });

// Route::get('/todo/{id}/edit', function($id){
// 	return $id;
// });
// Route::get('/todo/{id}/edit', function($id){
// 	return $id;
// })->name("todo.edit");

Route::get('/contact', 'display@displaycontact');

Route::resource('/welcome','showdisplay');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
