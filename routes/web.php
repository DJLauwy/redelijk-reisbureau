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

//Routes
Route::get('/', 'HomeController@homePage')->name('home');

//Tests and examples
Route::get('/test', function () {
    return 'Dit is een test';
});
//Route::get('/', function () {
//    return view('home');
//})->name('home');
