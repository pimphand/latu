<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PopUpController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
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
Route::post('/store', [InboxController::class, 'store'])->name('send.messages');
Route::get('/service', [FrontendController::class, 'service'])->name('service');
Route::get('/berita/{id}', [FrontendController::class, 'beritaDetail'])->name('berita.detail');
Route::get('/berita', [FrontendController::class, 'berita'])->name('berita');
Route::get('/kontak', [FrontendController::class, 'kontak'])->name('kontak');
Route::get('/tentang-kami', [FrontendController::class, 'about'])->name('about');
Route::get('/produk', [FrontendController::class, 'produk'])->name('produk');
Route::get('/produk/{id}', [FrontendController::class, 'produkDetail'])->name('produk.detail');

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('admin/slider', SliderController::class);
    Route::get('admin/inbox', [InboxController::class, 'index'])->name('inbox.index');
    Route::post('admin/inbox/{id}', [InboxController::class, 'update'])->name('inbox.update');

    Route::resource('admin/popup', PopUpController::class);
    Route::resource('admin/service', ServiceController::class);

    Route::resource('admin/product', ProductController::class);
    Route::resource('admin/news', NewsController::class);

    Route::post('admin/news/{id}/unpublish', [NewsController::class, 'unPublish'])->name('unPublish');
    Route::post('admin/news/{id}/publish', [NewsController::class, 'Publish'])->name('Publish');

    Route::resource('admin/about', AboutController::class);

    Route::resource('admin/category-product', ProductCategoryController::class);
});


require __DIR__ . '/auth.php';
