<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware'=>['auth:sanctum']], function(){
    //le route per le quali devi essere autenticato



    //logout
    Route::post('/logout', [AuthController::class, 'logout']);

});

//iscrizione
Route::post('/register', [AuthController::class, 'register']);

//login
Route::post('/login', [AuthController::class, 'login']);


//debug cerca vendor, ma possibilmente mi servirà in futuro
Route::post('/vendor-search', [VendorController::class, 'search']);

Route::get('/vendor-search/{nome}', [VendorController::class, 'search']);