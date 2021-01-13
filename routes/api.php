<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\CampaignController;
use App\Http\Controllers\API\GroupController;
use App\Http\Controllers\API\CityController;
use App\Http\Controllers\API\DiscountController;
use App\Http\Controllers\API\ProductController;

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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::prefix('v1')->group(function() {
    Route::get('/ping', function() {
        return response()->json(['message' => 'Servidor em funcionamento...']);
    });

    Route::apiResource('cities', CityController::class);
    Route::apiResource('groups', GroupController::class);
    Route::apiResource('campaigns', CampaignController::class);
    Route::apiResource('discounts', DiscountController::class);
    Route::apiResource('products', ProductController::class);
});
