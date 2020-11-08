<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/inset', [App\Http\Controllers\HomeController::class, 'inset'])->name('inset');
Route::any('/resolve', [App\Http\Controllers\HomeController::class, 'resolve'])->name('resolve');
Route::any('/reset', [App\Http\Controllers\HomeController::class, 'reset'])->name('reset');
Route::any('/clear', [App\Http\Controllers\HomeController::class, 'clear'])->name('clear');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
