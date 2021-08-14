<?php

use App\Http\Controllers\CategoryController;
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

Route::get('/home', 'HomeController@index')->name('home');

// ADMIN MANAGE CATEGORY
Route::group(['prefix' => 'admin/category'],function() {
    Route::get('list','CategoryController@index')->name('admin.show.category');
    Route::get('create','CategoryController@create')->name('admin.create.category');
    Route::post('create','CategoryController@store')->name('admin.store.category');
    Route::get('edit/{category}','CategoryController@show')->name('admin.edit.category');
    Route::post('edit/{category}','CategoryController@update')->name('admin.save.category');
    Route::delete('delete/{category}','CategoryController@destroy')->name('admin.del.category');
});

/// ADMIN MANAGE ARTICLE
