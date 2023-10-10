<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ProjectController;
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


Route::get("/login",[loginController::class,"index"])->name("login");
Route::post("/login",[loginController::class,"singIn"])->name("login");
Route::get("/login/create",[loginController::class,"create"])->name("createUser");
Route::get("/logout",[loginController::class,"destroy"]);
Route::post("/login/store",[loginController::class,"store"])->name("register");

Route::middleware("auth")->get("/dashboard",[indexController::class,"dashboard"])->name("dashboard");

Route::get("/dashboard/create/new",[ProjectController::class,"index"])->name("create.new");