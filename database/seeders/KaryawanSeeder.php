<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('karyawan')->insert([
            [
                "npk" => "10001",
                "nama" => "Agus",
                "alamat" => "Jakarta"
            ],
            [
                "npk" => "10002",
                "nama" => "Asep",
                "alamat" => "Purbalinga"
            ],
            [
                "npk" => "10003",
                "nama" => "Jajang",
                "alamat" => "Subang"
            ]
        ]);
    }
}
