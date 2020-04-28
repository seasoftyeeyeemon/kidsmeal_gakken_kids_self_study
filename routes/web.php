<?php

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



Auth::routes();

Route::get('/cooking-challenge', 'SelfStudyController@cooking_challenge')->name('challenge');
Route::get('/educe-food-edu', 'SelfStudyController@educe_food_edu')->name('educe');
