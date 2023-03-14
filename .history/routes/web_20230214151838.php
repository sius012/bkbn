<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/siswaaktif',[App\Http\Controllers\DataSiswaController::class,"siswaaktif"]);
Route::get('/detailsiswa/{nis}', [\App\Http\Controllers\DataSiswaController::class, "detailsiswa"]);
Route::get('/ajukankonseling', [\App\Http\Controllers\KonselingController::class, "ajukankonseling"]);

Route::get('/eraport', [\App\Http\Controllers\EraportController::class, "eraport"]);
ROute::get('/list-admin', [\App\Http\Controllers\KelolaPenggunaController::class, "list"])


Route::get('/importexcel', [\App\Http\Controllers\EraportController::class, "importexcel"]);