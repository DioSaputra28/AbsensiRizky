<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\RekapController;
use App\Models\Absensi;
use Illuminate\Support\Facades\Route;

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
    return view('tentang',[
        "title" => "Tentang"
    ]);
});
Route::resource('/murid', MuridController::class);
Route::resource('/absen', AbsensiController::class);
Route::resource('/recap', RekapController::class);