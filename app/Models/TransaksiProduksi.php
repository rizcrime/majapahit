<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiProduksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi_produksi';

    // public function karyawan(){
    //     return $this->belongsTo(Karyawan::class, 'npk', 'npk');
    // }

    // public function lokasi(){
    //     return $this->belongsTo(Lokasi::class, 'lokasi', 'kode');
    // }

    // public function planning(){
    //     return $this->belongsTo(Planning::class, 'kode', 'kode');
    // }

    // public function item(){
    //     return $this->belongsTo(Item::class, 'kode', 'kode');
    // }

    // public function login(){
    //     return $this->belongsTo(Login::class, 'npk', 'username');
    // }
}
