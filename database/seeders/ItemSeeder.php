<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item')->insert([
            [
                "kode_item" => 'M001',
                "nama_item" => 'Bolpen'
            ],
            [
                "kode_item" => 'M002',
                "nama_item" => 'Pensil'
            ],
            [
                "kode_item" => 'M003',
                "nama_item" => 'Penghapus'
            ],
            [
                "kode_item" => 'M004',
                "nama_item" => 'Spidol'
            ]
        ]);
    }
}
