<?php

use App\Http\Controllers\LombaController;
use App\Http\Controllers\TimController;
use App\Http\Controllers\UserController;
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

Route::get('/',  [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

//LOMBA ROUTE
Route::get('/lomba/create',[LombaController::class, 'create'])->name('lomba.create');
Route::post('/lomba',[LombaController::class, 'store'])->name('lomba.store');
Route::get('/lomba/search',[LombaController::class, 'search'])->name('lomba.search');
Route::post('/lomba/search',[LombaController::class, 'filter'])->name('lomba.filter');
Route::get('/lomba/{lomba}',[LombaController::class, 'show'])->name('lomba.show');

Route::get('/user/{user}/edit',[UserController::class, 'edit'])->name('user.edit');
Route::post('/user/{user}',[UserController::class, 'update'])->name('user.update');
Route::get('/user/{user}',[UserController::class, 'show'])->name('user.show')->middleware('auth');

Route::get('/tim/create', [TimController::class,"create"])->name('tim.create');
Route::post('/tim', [TimController::class,"store"])->name('tim.store');
Route::get('/tim/search/', [TimController::class,"search"])->name('tim.search');
Route::get('/tim/search/{judul}', [TimController::class,"searchValue"])->name('tim.search.value');
Route::post('/tim/search/', [TimController::class,"find"])->name('tim.find');
Route::get('/tim/{tim}', [TimController::class,"show"])->name('tim.show');

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
Route::get('/cari_lomba', function() {
    return view('cari_lomba');
});

Route::get('/detail_cari_tim', function() {
    return view('detail_cari_tim');
});

Route::get('/buat_tim', function() {
    return view('buat_tim');
});
