<?php

declare(strict_types=1);

use App\Http\Api\Controllers\HomeController;
use App\Http\Api\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::prefix('v1')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/home', 'index');
    });

    Route::controller(ProductController::class)->prefix('product')->group(function () {
        Route::get('get-attr', 'getAttributes');
    });
    Route::resource('product', ProductController::class);
});


