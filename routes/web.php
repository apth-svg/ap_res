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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[App\Http\Controllers\OrderController::class,'index'])->name('order.form');
Route::post('order_submit',[App\Http\Controllers\OrderController::class,'submit'])->name('order.submit');
Route::get('order/{order}/serve',[App\Http\Controllers\OrderController::class,'serve']);

Route::resource('dish', App\Http\Controllers\DishesController::class);
Route::get('order',[App\Http\Controllers\DishesController::class,'order'])->name('order.list');
Route::get('order/{order}/approve',[App\Http\Controllers\DishesController::class,'approve']);
Route::get('orde/{order}/cancel',[App\Http\Controllers\DishesController::class,'cancel']);
Route::get('order/{order}/ready',[App\Http\Controllers\DishesController::class,'ready']);

Auth::routes([
    'reset' => false,
    'verify' => false,
]);