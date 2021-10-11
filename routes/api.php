<?php

use App\Http\Controllers\Api\AboutController;
use App\Http\Controllers\Api\BenefitController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\LocationController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\SliderController;
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
Route::get('about', [AboutController::class, 'index']);
Route::get('benefit', [BenefitController::class, 'index']);
Route::get('product', [ProductController::class, 'index']);
Route::get('contact', [ContactController::class, 'index']);
Route::get('location', [LocationController::class, 'index']);
Route::get('slider', [SliderController::class, 'index']);
