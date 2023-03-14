<?php

use App\Http\Controllers\RestaurantCategoryController;
use App\Http\Controllers\RestauranteController;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\FoodCategoryController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\MarkerController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
Route::view('home','home')->middleware(['verified']);

Route::middleware(['verified'])->get('home', function () {
        $valor=Auth::user()->rol_id_fk;
        if($valor==1||$valor==9){
            return redirect('admin/home');
        }
        if($valor==2){
            return redirect('client/home');
        }
        else{
            return view('home');
        }
})->name('home');


Route::prefix('admin')->middleware(['admin','verified'])->group(function(){

    Route::view('home','admin.home');
    Route::resource('users', UserController::class);
    Route::resource('category/restaurant',RestaurantCategoryController::class);
    Route::resource('restaurants', RestauranteController::class);
    Route::resource('category/food',FoodCategoryController::class);
    Route::resource('food',FoodController::class);
    Route::get('/show-map',[MarkerController::class, 'index']);
    Route::post('/store',[MarkerController::class, 'store'])->name('store');
    Route::get('/retrieve',[MarkerController::class, 'retrieve'])->name('retrieve');
});




Route::prefix('client')->middleware(['client','verified'])->group(function(){
    Route::view('home','client.home');
    // Route::resource('restaurants',RestaurantController::class);
    //Route::resource('category/food',FoodCategoryController::class);
    //Route::resource('food',FoodController::class);

});


