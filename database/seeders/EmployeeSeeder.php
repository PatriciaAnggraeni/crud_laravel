<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // memgisi data yang akan di simpan ke dalam database dengan nama tabel pegawai
        DB::table( 'employees' ) -> insert( [
            'nama' => 'Patria Anggara',
            'jenis_kelamin' => 'laki',
            'no_telph' => '088190873412',
            'alamat' => 'Jalan Garuda No. 100'
        ] );
    }
}
