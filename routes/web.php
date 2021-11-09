<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Google login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class,'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

// Facebook login
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class,'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);

// Github login
Route::get('login/github', [App\Http\Controllers\Auth\LoginController::class,'redirectToGithub'])->name('login.github');
Route::get('login/github/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGithubCallback']);

//Vuejs CRUD
Route::get('/products',[App\Http\Controllers\Api\ProductController::class,'index']);
Route::delete('/delete/product/{id}',[App\Http\Controllers\Api\ProductController::class,'destroy']);
Route::post('/create/products',[App\Http\Controllers\Api\ProductController::class,'store']);
Route::get('/edit/products/{id}',[App\Http\Controllers\Api\ProductController::class,'show']);
Route::put('/update/products',[App\Http\Controllers\Api\ProductController::class,'update']);
Route::get('/products/deleted',[App\Http\Controllers\Api\ProductController::class,'deleted']);