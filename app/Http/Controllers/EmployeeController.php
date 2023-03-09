<?php

namespace App\Http\Controllers;

use App\Exports\EmployeeExport;
use Illuminate\Http\Request;
use App\Models\Employee;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class EmployeeController extends Controller
{
    // membuat fungsi index untuk me-return view (tampilan untuk data pegawai)
    public function index(Request $request) {

        // mengambil semua data di tabel employee
        // $data_pegawai = Employee::all();

        // die dump datanya menggunakan fungsi dd()
        // dd($data_pegawai);

        // return file blade.php dengan nama pegawai
        // lempar aata yang ditangkap dari database ke view pegawai

        // membuat pagination untuk menampilkan data sesuai kehendak user
        // $data_pegawai = Employee::paginate(3);

        // membuat kolom search untuk data pegawai
        if ( $request->has('search')) { // jika request menangkap request berupa 'search'

            // cari data berdasarkan nama yang dicari
            $data_pegawai = Employee::where('nama', 'LIKE', '%' .$request->search. '%')->paginate(3);
        } else {

            // jika tidak, tampilkan semua data
            $data_pegawai = Employee::paginate(3);
        }

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
        // Employee::create( $request->all() );

        // tampung semua data yang tekah diambil dari database
        $data = Employee::create( $request->all() );

        // tambahkan kondisi jika user memasukkan sebuah file (di sini berupa foto)
        if ( $request->hasFile( 'foto' ) ) {

            // jika user menginputkan gambar, maka pindahkan gambar tersebut di sutau folder dengan nama aslis dari file gambasr tersebut
            $request->file('foto')->move('foto_pegawai/', $request->file('foto')->getClientOriginalName());

            // jika gamabr sudah berhasil didapatkan, ambil nama dari file gambar tersebut
            $data->foto = $request->file('foto')->getClientOriginalName();

            // lalu simpan gambarnya ke dalam database
            $data->save();
        }

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

    // membuat method untuk mengeksport data ke pdf
    public function eksport_to_pdf() {

        // ambil semua data employee
        $data_pegawai = Employee::all();

        // kita kirim data pdf ke sebuah view
        view()->share('data_pegawai', $data_pegawai);

        // taruh hasil cetak pdf ke view baru
        $pdf = Pdf::loadview('datapegawaipdf');

        // lalu return nilai dari permintaan download data pegawai sebagai pdf tadinya
        // isi nama download-an sesuai keinginan
        return $pdf->download('data-pegawai.pdf');

    }

    // membuat method untuk melakukan export ke excel
    public function eksport_to_excel() {
        return Excel::download(new EmployeeExport, 'datapegawai.xlsx');
    }

}
