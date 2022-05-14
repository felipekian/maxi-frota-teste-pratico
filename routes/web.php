<?php

use App\Http\Controllers\AutenticationController;
use App\Http\Controllers\UserController;
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

Route::get('/', [AutenticationController::class, 'index'])->name('site.auth.index');
Route::post('/logar', [AutenticationController::class, 'login'])->name('site.auth.login');

Route::get('/create-account', [UserController::class, 'index'])->name('site.user.index');
Route::post('/create-account-user', [UserController::class, 'store'])->name('site.user.store');
