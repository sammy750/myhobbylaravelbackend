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

use App\Http\Controllers\PlayersController;
 
 
Route::get('/players',[App\Http\Controllers\PlayersController::class, 'index']);

Route::get('/players/{id}',[App\Http\Controllers\PlayersController::class, 'show']);

Route::get('/playerdata',[App\Http\Controllers\PlayersController::class, 'playerdata']);

Route::post('/players',[App\Http\Controllers\PlayersController::class, 'store']);
 
Route::put('/players/{id}',[App\Http\Controllers\PlayersController::class, 'update']);
 
Route::delete('/players/{id}',[App\Http\Controllers\PlayersController::class, 'destroy']);
 
 
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


