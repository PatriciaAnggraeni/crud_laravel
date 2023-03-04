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
    public function masukkan_data_pegawai(Request $request) {
        // dd( $request -> all() );

        // lalu buat request dari data yang diminta dan simpan ke database
        Employee::create( $request->all() );

        // jika sudah atau berhasil mengisi data, maka kembalika ke halaman data pegawai
        // tambahkan pesan jika data berhasil diinput
        return redirect()->route( 'data_pegawai' )->with('berhasil', 'Data Berhasil Ditambahkan!');

    }

    // membuat method untuk mengambil dan menampilkan data berdasarkan id
    public function edit_data( $id ) {

        // temukan id berdasarkan data yang diedit
        $data = Employee::find( $id );

        // die dump data terlebih dahulu
        // dd( $data );

        // kembalikan nilai yang ditampung dalam variabel data ke view
        return view( 'editdata', compact('data') );
    }

    // membuat method untuk menyimpan dan menampilkan data yang dirubah
    // membutuhkan parameter request dan idnya
    public function simpan_perubahan(Request $request, $id) {

        // find dulu datanya berdasarkan id
        $data = Employee::find( $id );

        // tampung request yag diterima
        $data->update( $request->all() );

        // jika data berhasil dirubah, maka redirect langsung ke halaman pegawai
        // kirimkan pesan bahwa data berhasil diupdate
        return redirect()->route( 'data_pegawai' )->with( 'berhasil', 'Data Berhasil Di rubah!' );
    }

    // membuat method untuk menghapus data pegawai
    public function hapus_data_pegawai( $id ) {

        // find / cari data sesuai id
        $data = Employee::find( $id );

        // jika ditenukan, maka hapus data tersebut
        $data->delete();

        return redirect()->route( 'data_pegawai' )->with( 'berhasil', 'Data Berhasil Dihapus' );
    }
}
