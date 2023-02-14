<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Auth\FacebookController;
use App\Http\Controllers\FacebookController;
//use App\Http\Controllers\SocialAuthFacebookController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Route::get('/auth/facebook/redirect', [FacebookController::class, 'handleFacebookRedirect']);
//Route::get('/auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);

Route::controller(FacebookController::class)->group(function(){
    Route::get('auth/facebook', 'redirectToFacebook')->name('auth.facebook');
    Route::get('auth/facebook/callback', 'handleFacebookCallback');
});

// Route::get('/redirect', 'SocialAuthFacebookController@redirect');
// Route::get('/callback', 'SocialAuthFacebookController@callback');

Route::get('/home', 'HomeController@index')->name('home');
