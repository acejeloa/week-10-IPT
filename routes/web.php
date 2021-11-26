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

Route::get('/',[App\Http\Controllers\InventoryController::class,'index']);
Route::get('inventory-list-show',[App\Http\Controllers\InventoryController::class,'show']);
Route::get('create-inventory',[App\Http\Controllers\InventoryController::class,'create']);
Route::post('store-inventory',[App\Http\Controllers\InventoryController::class,'store']);
