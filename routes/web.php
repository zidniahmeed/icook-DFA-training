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
Route::get('/category',[CategoryController::class,'index']);
Route::get('/createcategory',[CategoryController::class,'create']);
Route::get('/editcategory',[CategoryController::class,'edit']);

//category
Route::get('/resep',[ResepController::class,'index']);
Route::get('/createresep',[ResepController::class,'create']);
Route::get('/editresep',[ResepController::class,'edit']);

//resep
Route::get('/video',[VideoController::class,'index']);
Route::get('/createvideo',[VideoController::class,'create']);
Route::get('/editvideo',[VideoController::class,'edit']);






