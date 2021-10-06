<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BenefitController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\SitePlanController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SocialMediaController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resources([
        'abouts'    => AboutController::class,
        'benefits'  => BenefitController::class,
        'products'  => ProductController::class,
        'productImage'  => ProductImageController::class,
        'location'  => LocationController::class,
        'slider'  => SliderController::class,
        'site_plan'  => SitePlanController::class,
        'social_media'  => SocialMediaController::class,
    ]);
});

require __DIR__ . '/auth.php';
