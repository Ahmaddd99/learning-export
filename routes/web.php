<?php

use App\Http\Controllers\KaryawanController;
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
    return view('welcome');
});

Route::prefix('/karyawan')->name('karyawan.')->group(function(){
    Route::get('/', [KaryawanController::class, 'index'])->name('index');
    Route::get('/export', [KaryawanController::class, 'karyawanExport'])->name('get.export');
    Route::post('/import', [KaryawanController::class, 'karyawanImport'])->name('post.import');
});

// Route::prefix('/import')->name('import')->group(function(){

// });
