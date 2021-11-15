<?php

use App\Http\Controllers\CheckSessionController;
use App\Http\Controllers\EditUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::post('/users/register', RegisterController::class)->name('register');
Route::post('/users/login', LoginController::class)->name('login');
Route::post('/users/logout', LogoutController::class)->name('logout');
Route::post('/users/checkSession', CheckSessionController::class)->name('check-session');
Route::any('/users/edit', EditUserController::class)->name('edit-user');

Route::middleware(['auth:api'])->group(function () {
    //
});
