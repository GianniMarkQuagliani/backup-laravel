<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::name('admin.')
        ->prefix('admin')
        ->group(function () {
            Route::get('/', [DashboardController::class,'index'])->name('home');
            Route::resource('posts', PostController::class);
            Route::resource('categories', CategoryController::class);
            Route::resource('tags', TagController::class);
        });
