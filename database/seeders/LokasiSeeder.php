<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lokasi')->insert([
            [
                "kode_lokasi" => 'L001',
                'nama_lokasi' => 'Lokasi 1'
            ],
            [
                "kode_lokasi" => 'L002',
                'nama_lokasi' => 'Lokasi 2'
            ],
            [
                "kode_lokasi" => 'L003',
                'nama_lokasi' => 'Lokasi 3'
            ],
            [
                "kode_lokasi" => 'L004',
                'nama_lokasi' => 'Lokasi 4'
            ]
        ]);
    }
}
