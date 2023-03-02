<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    // membuat fungsi index untuk me-return view (tampilan untuk data pegawai)
    public function index() {

        // mengambil semua data di tabel employee
        $data_pegawai = Employee::all();

        // die dump datanya menggunakan fungsi dd()
        // dd($data_pegawai);

        // return file blade.php dengan nama pegawai
        // lempar aata yang ditangkap dari database ke view pegawai
        return view( 'pegawai', compact('data_pegawai') );
    }

    // membuat fungsi tambah_pegawai untuk me-return view (tampilan untuk tambah data pegawai)
    public function tambah_pegawai() {
        return view( 'tambahdata' );
    }

    // membuat fungsi untuk melakukan post data dan disimpan ke database
    // buat paramter Request untuk merima masukkan / request
    public function masuk_data_pegawai(Request $request) {
        // dd( $request -> all() );

        // lalu buat request dari data yang diminta dan simpan ke database
        Employee::create( $request -> all() );

        // jika sudah atau berhasil mengisi data, maka kembalika ke halaman data pegawai
        return redirect() -> route( 'data_pegawai' );

    }
}
