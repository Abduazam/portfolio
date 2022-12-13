<?php

use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\{HomeController, CategoryController, PortfolioController};
use Illuminate\Support\Facades\Auth;
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

// FRONT ROUTES
Route::get('/', [SiteController::class, 'index']);
Route::get('resume', [SiteController::class, 'resume']);
Route::get('portfolio', [SiteController::class, 'projects']);
Route::get('/portfolio/{id}', [SiteController::class, 'portfolio'])->where(['id' => '[0-9]+']);

// AUTH ROUTES
Auth::routes();

// BACKEND ROUTES
Route::middleware(['role:admin'])->prefix('dashboard')->group(static function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::resource('category', CategoryController::class);
    Route::resource('portfolio', PortfolioController::class);
});


