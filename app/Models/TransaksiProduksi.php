<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiProduksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi_produksi';

    protected $fillable = [
        'npk_karyawan',
        'tanggal_transaksi',
        'kode_lokasi',
        'kode_item'
    ];

    public function karyawan(){
        return $this->belongsTo(Karyawan::class, 'npk_karyawan', 'npk_karyawan');
    }

    public function lokasi(){
        return $this->belongsTo(Lokasi::class, 'kode_lokasi', 'kode_lokasi');
    }

    public function planning(){
        return $this->belongsTo(Planning::class, 'kode_item', 'kode_planning');
    }

    public function item(){
        return $this->belongsTo(Item::class, 'kode_item', 'kode_item');
    }

    public function login(){
        return $this->belongsTo(Login::class, 'npk_karyawan', 'username');
    }
}
