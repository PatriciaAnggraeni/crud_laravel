<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
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
    return view( 'welcome' );
});


// membuat router baru untuk mengakses halaman data pegawai
Route::get('/data_pegawai', [EmployeeController::class, 'index'])->name('data_pegawai');

// membuat router baru untuk mengakses halaman tambah data pegawai
Route::get('/tambah_data_pegawai', [EmployeeController::class, 'tambah_pegawai'])->name( 'tambah_data_pegawai');

// membuat router baru untuk mengakses halaman tambah data pegawai (insert)
Route::post('/masukkan_data_pegawai', [EmployeeController::class, 'masukkan_data_pegawai'])->name( 'masukkan_data_pegawai');

// membuat router baru untuk menampilkan data berdasarkan id
Route::get('/edit_data/{id}', [EmployeeController::class, 'edit_data'] )->name('edit_data');

// membuat router baru untuk menampilkan data yang telah dirubah berdasarkan id
Route::post('/simpan_perubahan/{id}', [EmployeeController::class, 'simpan_perubahan'])->name( 'simpan_perubahan');

// membuat router baru untuk menghapus data berdasarkan id
Route::get('/hapus_data_pegawai/{id}', [EmployeeController::class, 'hapus_data_pegawai'])->name('hapus_data_pegawai');

// membuat router baru untuk melakukan export pdf
Route::get('/eksportpdf', [EmployeeController::class, 'eksport_to_pdf'])->name('eksportpdf');


