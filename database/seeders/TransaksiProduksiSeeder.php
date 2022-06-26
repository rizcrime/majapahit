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
                'npk' => '10001',
                'tanggal_transaksi' => '2021-01-05 09:31:01',
                'lokasi' => 'L001',
                'kode' => 'M001'
            ],
            [
                'npk' => '10002',
                'tanggal_transaksi' => '2021-01-12 09:32:01',
                'lokasi' => 'L002',
                'kode' => 'M002'
            ],
            [
                'npk' => '10003',
                'tanggal_transaksi' => '2021-01-12 09:33:01',
                'lokasi' => 'L001',
                'kode' => 'M001'
            ],
            [
                'npk' => '10001',
                'tanggal_transaksi' => '2021-01-13 09:34:01',
                'lokasi' => 'L003',
                'kode' => 'M003'
            ],
            [
                'npk' => '10002',
                'tanggal_transaksi' => '2021-01-13 09:35:01',
                'lokasi' => 'L004',
                'kode' => 'M004'
            ],
            [
                'npk' => '10003',
                'tanggal_transaksi' => '2021-01-13 09:36:01',
                'lokasi' => 'L002',
                'kode' => 'M002'
            ]
        ]);
    }
}
