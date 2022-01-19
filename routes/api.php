<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoreController;
use App\Http\Controllers\JuniorEnterpriseController;

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


Route::prefix('v1')->group(function () {

    // Cores
    Route::prefix('cores')->group(function() {
        Route::get('', [CoreController::class, 'index']);
        Route::post('', [CoreController::class, 'store']);
        Route::get('{core}', [CoreController::class, 'show']);
        Route::put('{core}', [CoreController::class, 'update']);
        Route::delete('{core}', [CoreController::class, 'destroy']);
    });

    Route::prefix('juniorenterprises')->group(function() {
        Route::get('', [JuniorEnterpriseController::class, 'index']);
        Route::post('', [JuniorEnterpriseController::class, 'store']);
        Route::get('{juniorenterprise}', [JuniorEnterpriseController::class, 'show']);
        Route::put('{juniorenterprise}', [JuniorEnterpriseController::class, 'update']);
        Route::delete('{juniorenterprise}', [JuniorEnterpriseController::class, 'destroy']);
    });
});
