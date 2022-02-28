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
  Route::get('schedules/{type}/{name}/{id}/latest-schedule-match-list-venue-dates-team-list',[ArticlesController::class,'create'])->name('schedule'); 
Route::get('matchs/{name}/{id}',[ArticlesController::class,'match'])->name('match');
Route::get('details/{name}/{id}',[ArticlesController::class,'show'])->name('details');
  Route::get('{name}',[ArticlesController::class,'all'])->name('all');
  Route::get('tags/{name}/{id}', [ArticlesController::class, 'blog_tag_detail'])->name('.tags');
  Route::get('match-details/{name}',[ArticlesController::class,'match_details'])->name('match-details');
  Route::get('schedules/{name}/latest-schedule-match-list-venue-dates-team-list/{id}',[ScheduleController::class,'create'])->name('schedule');
  Route::get('sports/{name}/{id}',[ScheduleController::class,'sport'])->name('sport');
  Route::get('leagues/{type}/{name}/{id}',[ScheduleController::class,'show'])->name('league');
  Route::get('events/{uname}/{type}/{name}/{id}',[ScheduleController::class,'event'])->name('event');
  Route::get('players/{name}/{id}',[ScheduleController::class,'player'])->name('player');
Route::get('seasons/{name}/{name1}/{name2}/{name3}/{id}',[ScheduleController::class,'season'])->name('season');
  Route::post('add_comment',[ScheduleController::class,'add_comment'])->name('add_comment');

  Route::get('/privacy/policy',[ScheduleController::class,'privacy_policy']);


  Route::get('/terms/condition',[ScheduleController::class,'terms_policy']);


