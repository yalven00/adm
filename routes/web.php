<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
	return view('welcome');
});
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//ships source
Route::get('ships.index', [App\Http\Controllers\ShipsController::class, 'index'])->name('ships.index');
Route::get('ships.edit/{id}', [App\Http\Controllers\ShipsController::class, 'edit'])->name('ships.edit');
Route::post('ships.update', [App\Http\Controllers\ShipsController::class, 'update'])->name('ships.update');
//categories source
Route::get('categories.index', [App\Http\Controllers\CategoriesController::class, 'index'])->name('categories.index');
Route::get('categories.edit/{id}', [App\Http\Controllers\CategoriesController::class, 'edit'])->name('categories.edit');
Route::post('categories.update', [App\Http\Controllers\CategoriesController::class, 'update'])->name('categories.update');



Auth::routes();
