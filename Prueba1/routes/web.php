<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(PageController::class)->group ( function (){
   Route::get('/','home')->name('home');
   Route::get('blog','blog')->name('blog');
   Route::get('blog/{post:slug}','post')->name('post');
   Route::get('/search','search')->name('search');
}) ;

//Route::resource('posts',PostController::class)->except('show');

//para resolver el hecho de que nos da error en la ruta cuando no estamos logeados
//de manera que cada que se quiera ir a esta ruta desde el URL se redireccione
//al login
Route::resource('posts', PostController::class)->except(['show'])->middleware(['auth']);
require __DIR__.'/auth.php';
