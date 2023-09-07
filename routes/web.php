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


//ログイン前でなければ入れない
Route::middleware(['guest'])->group(function () {
  //ログイン画面
  Route::get('/', [LoginController::class, 'showLogin'])->name('showLogin');
  //ログイン処理
  Route::post('login', [LoginController::class, 'login'])->name('login');
});


Route::get('/signup', [LoginController::class, 'showSignup'])->name('signup');

//ログイン後でなければ入れない
Route::middleware(['auth'])->group(function () {
  //ログアウト
  Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

//ホーム画面
Route::get('/home', [DiaryController::class, 'showHome'])->name('home');

Route::get('/camera', [DiaryController::class, 'showCamera'])->name('camera');

//マイページ
Route::get('/mypage', [DiaryController::class, 'showMypage'])->name('mypage');