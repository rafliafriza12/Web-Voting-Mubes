<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VoteController;

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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login',[LoginController::class, 'authenticate'])->name('postLogin');

Route::post('/logout',[LoginController::class, 'logout'])->name('logout');

Route::get('/voting', function () {
    return view('voting');
})->middleware(['auth','user']);


Route::post('/voting/vote', [VoteController::class, 'vote'])->name('vote');

Route::get('/admin', [LoginController::class, 'admin'])->middleware(['auth','admin']);
Route::get('/get-real-time-data',[VoteController::class, 'countVote']);
// Route::get('/score', [AdminController::class, 'index'])->middleware(['auth','admin']);
