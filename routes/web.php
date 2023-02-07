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

Route::get('/', function () { return view('index');});
Route::get('/blog', function () { return view('blog');});
Route::get('/photos', function () { return view('photos');});
Route::get('/movements', function () { return view('movements');});
Route::get('/plans', function () { return view('plans');});
Route::get('/schedules', function () { return view('schedules');});
Route::get('/contact', function () { return view('contact');});
