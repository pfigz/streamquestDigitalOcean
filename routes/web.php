<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FavoriteController;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/quest', function () {
        return Inertia::render('Search/SearchContainer');
    })->name('quest');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/favorites', function () {
        return Inertia::render('Favorites/FavoriteDashboard');
    })->name('favorites');
});

Route::middleware('auth:sanctum')->group(function(){
    Route::prefix('/favorites')->group(function () {
        Route::get('/list', [FavoriteController::class, 'index']);
        Route::get('/favorite/{id}', [FavoriteController::class, 'show']);
        Route::post('/save', [FavoriteController::class, 'store'])->name('favorites.save');
        Route::delete('/delete/{id}', [FavoriteController::class, 'destroy']);
    });  
});

Route::get('/quest/guest', function () {
    return Inertia::render('GuestSearch/GuestSearchContainer');
})->name('quest.guest');

