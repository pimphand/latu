<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PopUpController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\Types\Resource_;

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

Route::get('/', [FrontendController::class, 'home'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('admin/slider', SliderController::class);

    Route::resource('admin/popup', PopUpController::class);

    Route::resource('admin/product', ProductController::class);

    Route::resource('admin/category-product', ProductCategoryController::class);
});


require __DIR__ . '/auth.php';
