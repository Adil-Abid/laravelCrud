<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\mycontroller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
// Route::POST("user",[UserAuth::class,'userLogin']);
// Route::view("login",'login');
Route::view("index",'insertRead');
Route::Post("insertData",[mycontroller::class,'insert']);
Route::GET("index",[mycontroller::class,'readData']);
Route::view("update",'updateView');
Route::get("updatedelete",[mycontroller::class,'updateOrdelete']);
Route::get("updateData",[mycontroller::class,'update']);


