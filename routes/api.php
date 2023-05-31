<?php

declare(strict_types=1);

use App\Http\Controllers\Api\Customer\CreateCustomerController;
use App\Http\Controllers\Api\Customer\DeleteCustomerController;
use App\Http\Controllers\Api\Customer\GetCustomerController;
use App\Http\Controllers\Api\Customer\IndexCustomerController;
use App\Http\Controllers\Api\Customer\UpdateCustomerController;
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

Route::middleware('auth:sanctum')->get('/user', fn(Request $request) => $request->user());

Route::middleware('auth:sanctum')->group(static function (): void {
    Route::prefix('customer')->group(static function (): void {
        Route::get('/', IndexCustomerController::class);
        Route::put('/{id}', UpdateCustomerController::class);
        Route::post('/', CreateCustomerController::class);
        Route::get('/{id}/show', GetCustomerController::class);
        Route::delete('/{id}/delete', DeleteCustomerController::class);
    });
});
