<?php

namespace App\Http\Controllers;

use App\Models\TransaksiProduksi;
use App\Models\Item;
use App\Models\Lokasi;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\DB;

class TransaksiProduksiController extends Controller
{
    public function index()
    {
        // inCompatible at ELoquent Laravel 8 ---- !!! ???
        // $all_data = TransaksiProduksi::with(['karyawan', 'lokasi', 'planning', 'item'])->get();

        $all_data = DB::table('transaksi_produksi')
            ->join('karyawan', 'transaksi_produksi.npk', 'karyawan.npk')
            ->join('lokasi', 'transaksi_produksi.lokasi', 'lokasi.kode')
            ->join('planning', 'transaksi_produksi.kode', 'planning.kode')
            ->join('item', 'transaksi_produksi.kode', 'item.kode')
            ->join('login', 'transaksi_produksi.npk', 'login.username')
            ->select([
                'transaksi_produksi.id as id',
                'transaksi_produksi.tanggal_transaksi as tr_tgl',
                'transaksi_produksi.kode as tr_kode',
                'item.nama_item as it_nama',
                'lokasi.kode as lok_kode',
                'lokasi.nama_lokasi as lok_nama',
                'planning.qty_target as plan_qty',
                'login.created_by as log_by'
            ])
            ->get();
        $item = Item::get();
        $lokasi = Lokasi::get();
        // return $lokasi;
        return view('transaksi', compact('all_data', 'item', 'lokasi'));
    }

    public function update(Request $request)
    {
        $kode_item = $request->kode_item;
        $kode_lokasi = $request->kode_lokasi;
        if ($this->validasi_null($kode_item) == true) {
            Item::where('kode_item', $kode_item)->update([
                'kode_item' => $kode_item
            ]);
        }
        if ($this->validasi_null($kode_lokasi) == true) {
            Lokasi::where('kode_lokasi', $kode_lokasi)->update([
                'kode_lokasi' => $kode_lokasi
            ]);
        }
    }

    public function validasi_null($a)
    {
        if ($a != '' && $a != null) {
            return true;
        } else {
            return false;
        }
    }
}
