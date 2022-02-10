<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ScheduleController;

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
Route::get('schedule/{type}/{name}/{id}/Latest-Schedule-match-list-venue-dates-team-list',[ArticlesController::class,'create'])->name('schedule');
Route::get('match/{id}/{name}',[ArticlesController::class,'match'])->name('match');
Route::get('details/{name}/{id}',[ArticlesController::class,'show'])->name('details');
Route::get('all/{name}',[ArticlesController::class,'all'])->name('all');
Route::get('tags/{id}/{name}', [ArticlesController::class, 'blog_tag_detail'])->name('.tags');
Route::get('admin',[ArticlesController::class,'show'])->name('detaillsrr');
Route::get('match-details/{name}',[ArticlesController::class,'match_details'])->name('match-details');
Route::get('schedule/{id}/{name}/Latest-Schedule-match-list-venue-dates-team-list',[ScheduleController::class,'create'])->name('schedule');
Route::get('sport/{id}/{name}',[ScheduleController::class,'sport'])->name('sport');
Route::get('league/{id}/{type}/{name}',[ScheduleController::class,'show'])->name('league');
Route::get('event/{id}/{uname}/{type}/{name}',[ScheduleController::class,'event'])->name('event');
Route::get('player/{id}/{name}',[ScheduleController::class,'player'])->name('player');
Route::get('season/{id}/{name}/{name1}/{name2}/{name3}',[ScheduleController::class,'season'])->name('season');
Route::post('add_comment',[ScheduleController::class,'add_comment'])->name('add_comment');

