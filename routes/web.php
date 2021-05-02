<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ConversationController;

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

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'doLogin']);

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index']);

    Route::get('/conversation/twitter', [ConversationController::class, 'twitter']);
    Route::get('/conversation/facebook', [ConversationController::class, 'facebook']);
    Route::get('/conversation/instagram', [ConversationController::class, 'instagram']);

    Route::get('/report/channel', [ReportController::class, 'channel']);
    Route::get('/report/sentiment', [ReportController::class, 'sentiment']);

    Route::get('/logout', [LoginController::class, 'logout']);
});
