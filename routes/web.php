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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('layouts.main');
});


Route::get('/main',[CategoryController::class, 'index'] );



Route::get('/category', function () {
    return view('category.index');
});
Route::get('/createcategory', function () {
    return view('category.create');
});
Route::get('/editcategory', function () {
    return view('category.edit');
});



Route::get('/resep', function () {
    return view('resep.index');
});

Route::get('/video', function () {
    return view('video.index');
});



