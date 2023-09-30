<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [indexController::class,"index"]);


Route::get("/login",[loginController::class,"index"]);
Route::post("/login",[loginController::class,"index"]);
Route::get("/login/create",[loginController::class,"create"]);
Route::post("/login/store",[loginController::class,"store"])->name("login.store");
