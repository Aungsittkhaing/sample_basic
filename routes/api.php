<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ItemApiController;
use App\Http\Middleware\ApiAuthenticated;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::prefix("v1")->group(function () {
    Route::apiResource('item', ItemApiController::class)->middleware(ApiAuthenticated::class);

    Route::controller(AuthController::class)->group(function () {
        Route::post('register', 'register')->name("api.auth.register");
        Route::post('login', 'login')->name('api.auth.login');
        Route::post('logout', 'logout')->name('api.auth.logout')->middleware(ApiAuthenticated::class);
    });
});
