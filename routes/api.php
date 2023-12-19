<?php

use App\Http\Controllers\api\apiControllerBase;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/user', function (Request $request) {
    return User::all();
});
Route::get('/hash/{hash}', function ($hash) {
    return Hash::make($hash);
});

Route::post("/debug",function (Request $request) {
    dd($request->all());
});
Route::post("/{email}",[apiControllerBase::class,"store"]);
