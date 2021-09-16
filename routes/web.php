<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\HomeController;
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
Auth::routes();
Route::get('/', function () {
    return view('v_login');
});

Route::get('/add', [MahasiswaController::class, 'add']);
Route::post('/insert', [MahasiswaController::class, 'insert']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/biodata', [App\Http\Controllers\BiodataController::class, 'index'])->name('biodata');