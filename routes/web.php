<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CategoryController;

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



//category
Route::get('/category',[CategoryController::class,'index'])->name('category');



Route::get('/createcategory',[CategoryController::class,'create']);
Route::post('/insertcategory',[CategoryController::class, 'store']);
Route::get('/editcategory/{id}',[CategoryController::class,'edit']);
Route::post('/updatecategory/{id}',[CategoryController::class,'update']);
Route::get('/deletecategory/{id}',[CategoryController::class,'destroy']);


//category
Route::get('/resep',[ResepController::class,'index'])->name('resep');
Route::get('/createresep',[ResepController::class,'create']);
Route::get('/editresep/{id}',[ResepController::class,'edit']);
Route::post('/insertresep',[ResepController::class, 'store']);
Route::post('/updateresep/{id}',[ResepController::class,'update']);
Route::get('/deleteresep/{id}',[ResepController::class,'destroy']);

//resep
Route::get('/video',[VideoController::class,'index'])->name('video');
Route::post('/insertvideo',[VideoController::class, 'store']);
Route::get('/createvideo',[VideoController::class,'create']);
Route::get('/editvideo',[VideoController::class,'edit']);






