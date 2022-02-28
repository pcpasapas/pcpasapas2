<?php

use App\Http\Controllers\AlimentationsController;
use App\Http\Controllers\BoitiersController;
use App\Http\Controllers\CarteMeresController;
use App\Http\Controllers\ProcesseursController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/* |-------------------------------------------------------------------------- | API Routes |-------------------------------------------------------------------------- | | Here is where you can register API routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | is assigned the "api" middleware group. Enjoy building your API! | */
Route::get('alimentations', [AlimentationsController::class , 'show']);
Route::get('alimentationsshowGTA', [AlimentationsController::class , 'showGTA']);
Route::get('boitiers', [BoitiersController::class , 'show']);
Route::get('processeurs', [ProcesseursController::class , 'show']);
Route::get('cartemere', 'App\Http\Controllers\CarteMeresController@index');
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
