<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\pageController;
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

Route::get('/', [pageController::class, 'home'])->name('page.home');
//for inventory
// Route::prefix('inventory')->controller(ItemController::class)->group(function () {
//     Route::get('/', 'index')->name('item.index');
//     Route::post('/', 'store')->name('item.store');
//     Route::get('/create', 'create')->name('item.create');
//     Route::get('/{id}', 'show')->name('item.show');
//     Route::get('/{id}/edit', 'edit')->name('item.edit');
//     Route::delete('/{id}', 'destroy')->name('item.destroy');
//     Route::put('/{id}', 'update')->name('item.update');
// });

//for item
Route::resource('item', ItemController::class);
//for category
Route::resource('category', categoryController::class);
