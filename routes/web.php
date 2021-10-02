<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BenefitController;
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
    Route::resources([
        'abouts'    => AboutController::class,
        'benefits'  => BenefitController::class,
    ]);
});

require __DIR__ . '/auth.php';
