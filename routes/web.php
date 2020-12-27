<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContohController;
use App\Http\Controllers\MahasiswaController;

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

Route::get('halaman-satu',[ContohController::class,'index']);
Route::get('create-mahasiswa',[MahasiswaController::class,'create'])->name('create-mahasiswa');
Route::post('simpan-mahasiswa',[MahasiswaController:class,'store'])->name('simpan-mahasiswa');