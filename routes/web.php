<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController; //この行を追加
use App\Http\Controllers\DiaryController;

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

Route::get('scss', function () {
  return view('login');
});
Route::get('scss', function () {
  return view('signup');
});
Route::get('scss', function () {
  return view('main');
});
Route::get('scss', function () {
  return view('camera');
});

// Route::get('/', 'LoginController@showLogin')->name('login'); //この行は消す
Route::get('/', [LoginController::class, 'showLogin'])->name('showLogin'); //この書き方で

Route::post('login', [LoginController::class, 'login'])->name('login');


Route::get('/signup', [LoginController::class, 'showSignup'])->name('signup');

Route::get('/main', [DiaryController::class, 'showMain'])->name('main');

Route::get('/camera', [DiaryController::class, 'showCamera'])->name('camera');