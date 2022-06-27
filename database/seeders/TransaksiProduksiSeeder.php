<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiProduksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaksi_produksi')->insert([
            [
                'npk_karyawan' => '10001',
                'tanggal_transaksi' => '2021-01-05 09:31:01',
                'kode_lokasi' => 'L001',
                'kode_item' => 'M001'
            ],
            [
                'npk_karyawan' => '10002',
                'tanggal_transaksi' => '2021-01-12 09:32:01',
                'kode_lokasi' => 'L002',
                'kode_item' => 'M002'
            ],
            [
                'npk_karyawan' => '10003',
                'tanggal_transaksi' => '2021-01-12 09:33:01',
                'kode_lokasi' => 'L001',
                'kode_item' => 'M001'
            ],
            [
                'npk_karyawan' => '10001',
                'tanggal_transaksi' => '2021-01-13 09:34:01',
                'kode_lokasi' => 'L003',
                'kode_item' => 'M003'
            ],
            [
                'npk_karyawan' => '10002',
                'tanggal_transaksi' => '2021-01-13 09:35:01',
                'kode_lokasi' => 'L004',
                'kode_item' => 'M004'
            ],
            [
                'npk_karyawan' => '10003',
                'tanggal_transaksi' => '2021-01-13 09:36:01',
                'kode_lokasi' => 'L002',
                'kode_item' => 'M002'
            ]
        ]);
    }
}
