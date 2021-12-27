<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;

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


Route::get('/',[ArticlesController::class,'index']);
Route::get('schedule',[ArticlesController::class,'create'])->name('schedule');
// Route::get('index-old',[ArticlesController::class,''])->name('old-index');
Route::get('details/{id}',[ArticlesController::class,'show'])->name('details');
Route::get('admin',[ArticlesController::class,'show'])->name('detaillsrr');