<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // membuat variabel spesial $guarded agar semua data pegawai bisa dimasukkan ke database
    protected $guarded = [];

    // mengatur format tanggal di laravel
    // protected $dates = ['created_at'];
}
