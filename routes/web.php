<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();
Route::get('/dashboard', function() {
    return view('dashboard');
});
Route::get('/detail_lomba', function() {
    return view('detail');
});
Route::get('/profil', function() {
    return view('profil');
});
Route::get('/cari_tim', function() {
    return view('cari_tim');
});
Route::get('/edit_profil', function() {
    return view('edit_profil');
});
Route::get('/publikasi', function() {
    return view('publikasi');
});
