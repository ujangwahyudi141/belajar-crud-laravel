<?php

use App\Http\Controllers\BiodataController;
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

Route::get('/',[BiodataController::class,'index']);
Route::post('/update/{id}',[BiodataController::class,'update']);
Route::post('/simpan',[BiodataController::class,'store']);
Route::get('/delete/{id}',[BiodataController::class,'destroy']);

