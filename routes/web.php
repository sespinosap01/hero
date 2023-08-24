<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', 'App\Http\Controllers\AdminController@index')->name('admin.index');

    Route::resource('heroes', 'App\Http\Controllers\HeroController');
    Route::resource('item', 'App\Http\Controllers\ItemController');
    Route::resource('enemy', 'App\Http\Controllers\EnemyController');

});


        