<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiProduksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_produksi', function (Blueprint $table) {
            $table->id();
            $table->string('npk_karyawan', 5)->index();
            $table->timestamp('tanggal_transaksi');
            $table->string('kode_lokasi', 4);
            $table->string('kode_item', 4);
            $table->timestamps();
        });
        Schema::table('transaksi_produksi', function ($table) {
            $table->foreign('npk_karyawan')->references('npk_karyawan')->on('karyawan')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kode_lokasi')->references('kode_lokasi')->on('lokasi')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kode_item')->references('kode_item')->on('item')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_produksi');
    }
}
