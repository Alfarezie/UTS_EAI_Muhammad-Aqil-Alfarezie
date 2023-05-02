<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

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

Route::post('/register', [\App\Http\Controllers\Api\AuthController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);
});
Route::get('games', 'App\Http\Controllers\GameController@index');
Route::get('games/{id}', 'App\Http\Controllers\GameController@show');
Route::post('games', 'App\Http\Controllers\GameController@store');
Route::put('games/{id}', 'App\Http\Controllers\GameController@update');
Route::delete('games/{id}', 'App\Http\Controllers\GameController@delete');