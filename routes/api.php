<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\RegisterController;
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

Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});


Route::middleware('auth:sanctum')->group( function () {
    Route::get('/products/{id}', 'show');
    Route::post('/products', 'store');
    Route::get('/products', 'index');
    Route::put('/products', 'update');
    Route::delete('/products', 'destroy');
});



// Route::prefix('product')->group(function () {
//     Route::resource('products', ProductController::class);
// });

