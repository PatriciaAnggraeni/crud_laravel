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
Route::get( '/data_pegawai', [EmployeeController::class, 'index'] ) -> name( 'data_pegawai' );

// membuat router baru untuk mengakses halaman tambah data pegawai
Route::get( '/tambah_data_pegawai', [EmployeeController::class, 'tambah_pegawai'] ) -> name( 'tambah_data_pegawai' );

// membuat router baru untuk mengakses halaman tambah data pegawai (insert)
Route::post( '/masukkan_data_pegawai', [EmployeeController::class, 'masuk_data_pegawai'] ) -> name( 'masukkan_data_pegawai' );

// membuat router baru untuk menampilkan data berdasarkan id
Route::get( '/edit_data/{id}', [EmployeeController::class, 'edit_data'] ) -> name( 'edit_data' );
