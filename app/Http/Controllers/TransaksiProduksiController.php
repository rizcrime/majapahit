<?php

namespace App\Http\Controllers;

use App\Models\TransaksiProduksi;
use App\Models\Item;
use App\Models\Lokasi;
use Illuminate\Support\Facades\Auth;

class TransaksiProduksiController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
        $this->middleware(function ($request, $next) {
            $this->all_data = TransaksiProduksi::with(['karyawan', 'lokasi', 'planning', 'item'])->get();
            $this->id_kt = $request->id_kt;
            $this->date_time = $request->date_time;
            $this->kode_item = $request->input('cd_item');
            $this->kode_lokasi = $request->input('cd_lokasi');
            return $next($request);
        });
    }

    public function create()
    {
        if ($this->kode_item != null && $this->kode_lokasi != null && $this->date_time != null) {
            TransaksiProduksi::create([
                'npk_karyawan' => Auth::user()->username,
                'tanggal_transaksi' => date('Y-m-d H:i:s', strtotime($this->date_time)),
                'kode_lokasi' => $this->kode_lokasi,
                'kode_item' => $this->kode_item
            ]);
            return redirect('../transaksi')->with('success', 'Data Berhasil Dibuat!');
        } else {
            return redirect('../transaksi')->with('failed', 'Tidak boleh ada yang kosong');
        }
    }

    public function index()
    {
        $all_data = $this->all_data;
        $item = Item::get();
        $lokasi = Lokasi::get();
        return view('transaksi', compact('all_data', 'item', 'lokasi'));
    }

    public function update()
    {
        if ($this->kode_item != null && $this->kode_lokasi != null && $this->date_time != null) {
            TransaksiProduksi::where('id', $this->id_kt)->update([
                'tanggal_transaksi' => date('Y-m-d H:i:s', strtotime($this->date_time)),
                'kode_lokasi' => $this->kode_lokasi,
                'kode_item' => $this->kode_item
            ]);
            return redirect('../transaksi')->with('success', 'Data Berhasil Diperbaharui!');
        } else {
            return redirect('../transaksi')->with('failed', 'Tidak boleh ada yang kosong');
        }
    }

    public function destroy()
    {
        TransaksiProduksi::where('id', $this->id_kt)->delete();
        return redirect('transaksi')->with('success', 'Data Berhasil Dihapus!');
    }
}
