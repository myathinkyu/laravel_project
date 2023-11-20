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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'App\Http\Controllers\PageController@index');

#product

Route::get('products', 'App\Http\Controllers\PageController@index');
Route::get('products/create', 'App\Http\Controllers\ProductController@create');
Route::post('products/create', 'App\Http\Controllers\ProductController@store');
