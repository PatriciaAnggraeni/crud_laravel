<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // membuat fungsi index untuk me-return view (tampilan untuk data pegawai)
    public function index() {

        // return file blade.php dengan nama pegawai
        return view('pegawai');
    }
}
