<?php
use App\Http\Controllers\Admin\FoodCategoryController;
use App\Http\Controllers\Admin\FoodController;
use App\Http\Controllers\Admin\RestaurantCategoryController;
use App\Http\Controllers\Admin\RestaurantController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CalificacionesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\evaluations;
use App\Http\Controllers\MarkerController;

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
Route::middleware('auth.session')->group(function(){
    Route::post('/comments', [CommentController::class,'store'])->name('comment.store');
    Route::put('/comments/{comment}', [CommentController::class, 'update']);
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy']);
    Route::get('/comments/{comment}', [CommentController::class, 'show']);
    Route::post('mapa/store',[MarkerController::class, 'store'])->name('map.store');
    Route::post('/calificaciones', [CalificacionesController::class, 'store'])->name('calificacion.store');

});


Route::prefix('admin')->middleware(['admin','verified'])->group(function(){

    Route::view('home','admin.home');
    Route::resource('users', UserController::class);
    Route::resource('category/restaurant',RestaurantCategoryController::class);
    Route::resource('restaurants',RestaurantController::class);
    Route::resource('category/food',FoodCategoryController::class);
    Route::resource('restaurants/{ruc}/foods',FoodController::class);

    Route::get('/show-map',[MarkerController::class, 'index']);
    // Route::post('/store',[MarkerController::class, 'store'])->name('store');
    Route::get('/retrieve',[MarkerController::class, 'retrieve'])->name('retrieve');

});

Route::resource('restaurants/evaluations',evaluations::class);

Route::prefix('client')->middleware(['client','verified'])->group(function(){
    Route::view('home','client.home');
    // Route::resource('restaurants',RestaurantController::class);
    //Route::resource('category/food',FoodCategoryController::class);
    //Route::resource('food',FoodController::class);

});

Route::get('/eval', function () {
    return view('user.evaluacionRest');
});


