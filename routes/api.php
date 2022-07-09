<?php

use App\Http\Controllers\FavoriteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/quest')->group(function() {
    Route::get("/search/{query}",[SearchController::class, 'search'] );
    Route::get("/sources",[SearchController::class, 'sources'] );
    Route::get("/selection/{titleId}",[SearchController::class, 'selection'] );
});

// Route::get('/favorites/{id}', [FavoriteController::class, 'show']);
// Route::post('/store/{id}', [FavoriteController::class, 'store']);




