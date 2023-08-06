<?php

use App\Http\Controllers\BimbinganController;
use App\Http\Controllers\JadwalController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['middleware'=>'auth'],function(){
    Route::resource('Bimbingan', BimbinganController::class);
    Route::get('jadwal', JadwalController::class)->name('jadwal');

});

Route::get('tentang', TentangController::class)->name('tentang');
Route::get('materi', MateriController::class)->name('materi');

