<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product;
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

//Route::get('/', function () {
//    return view('index');
//});

//Route::get('/links', function () {
//     return view('links');
// });

// Route::get('/create', function () {
//     return view('create');
// });

Route::get('/', 'App\Http\Controllers\PageController@home');
//Route::get('/index', 'App\Http\Controllers\PageController@home');
Route::get('/links', 'App\Http\Controllers\PageController@links');
//create list
Route::get('/create', 'App\Http\Controllers\CreateController@index');
// Route::get('/create/edit', 'App\Http\Controllers\CreateController@show');
//Add
Route::get('/add', 'App\Http\Controllers\AddController@index');
Route::get('/add/new', 'App\Http\Controllers\AddController@create');
Route::get('/adds/{add}', 'App\Http\Controllers\AddController@show');
Route::post('/add', 'App\Http\Controllers\AddController@store');
//delete
Route::delete('add/{add}','App\Http\Controllers\AddController@destroy');
//edit
Route::get('adds/{add}/edit', 'App\Http\Controllers\AddController@edit');
Route::put('adds/{add}', 'App\Http\Controllers\AddController@update');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
