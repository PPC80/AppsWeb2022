<?php

// namespace App\Http\Controllers\Api;
// namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Api\BlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PortafolioController;
use App\Http\Controllers\Auth\AuthController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('portafolios', PortafolioController::class);

// Ruta pública para el manejo de inicio de sesión del usuario
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Rutas públicas para el portafolio
Route::get('/portafolios',[PortafolioController::class,'index']);
Route::get('/portafolios/{portafolio}',[PortafolioController::class,'show']);

Route::get('/blogs',[BlogController::class,'index']);
Route::get('/blogs/{blog}',[BlogController::class,'show']);

// Grupo de rutas protegidas
Route::middleware(['auth:sanctum'])->group(function ()
{
    // Ruta para el cierre de sesión
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Ruta para el portafolio
    Route::post('/portafolios',[PortafolioController::class,'store']);
    Route::put('/portafolios/{portafolio}',[PortafolioController::class,'update']);
    Route::delete('/portafolios/{portafolio}',[PortafolioController::class,'destroy']);

    //Rutas para el blog
    Route::post('/blogs',[BlogController::class,'store']);
    Route::put('/blogs/{blog}',[BlogController::class,'update']);
    Route::delete('/blogs/{blog}',[BlogController::class,'destroy']);
});



