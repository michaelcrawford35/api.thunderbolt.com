<?php

use App\Responses\ThunderboltResponse;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemLocationController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LocationItemController;
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
    // return response()->json([
    //     'message' => "You're not supposed to be here, criminal scum!"
    // ]);

    return new ThunderboltResponse(['message' => "You're not supposed to be here, criminal scum!"]);
});

Route::apiResource('items', ItemController::class);
Route::apiResource('locations', LocationController::class);
Route::apiResource('items.locations', ItemLocationController::class)->except(['store', 'show', 'update', 'destroy']);
Route::apiResource('locations.items', LocationItemController::class)->except(['store', 'show', 'update', 'destroy']);
