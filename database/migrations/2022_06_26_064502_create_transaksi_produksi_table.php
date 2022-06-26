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
            $table->string('npk', 5)->index();
            $table->timestamp('tanggal_transaksi');
            $table->string('lokasi', 4);
            $table->string('kode', 4);
            $table->integer('qty_actual');
            $table->timestamps();
        });
        Schema::table('transaksi_produksi', function ($table) {
            $table->foreign('npk')->references('npk')->on('karyawan')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('lokasi')->references('kode')->on('lokasi')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kode')->references('kode')->on('planning')->onDelete('cascade')->onUpdate('cascade');
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
