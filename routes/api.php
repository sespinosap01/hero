<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Raiz
Route::get('/', 'App\Http\Controllers\APIController@index');

//Heroes
Route::get('heroes', 'App\Http\Controllers\APIController@getAllHeroes');
Route::get('heroes/{id}', 'App\Http\Controllers\APIController@getHero');

//Enemigos
Route::get('enemies', 'App\Http\Controllers\APIController@getAllEnemies');
Route::get('enemies/{id}', 'App\Http\Controllers\APIController@getEnemy');


//Items
Route::get('items', 'App\Http\Controllers\APIController@getAllItems');
Route::get('items/{id}', 'App\Http\Controllers\APIController@getItem');


//BS
Route::get('bs/{heroID}/{enemyID}', 'App\Http\Controllers\APIController@runManualBS');
