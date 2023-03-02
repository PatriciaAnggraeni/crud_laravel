<?php

use App\Http\Controllers\EmployeeController;
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


// membuat router baru untuk mengakses halaman data pegawai
Route::get('/data_pegawai', [EmployeeController::class, 'index']);

// membuat router baru untuk mengakses halaman tambah data pegawai
Route::get('/tambah_data_pegawai', [EmployeeController::class, 'tambah_pegawai']);
