<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->unsignedBigInteger('id_petani');
            $table->unsignedBigInteger('id_kapasitas');
            $table->integer('jumlah_permintaan');
            $table->integer('total_harga');
            $table->date('tanggal_penjemputan')->nullable();
            $table->unsignedBigInteger('id_pegawai')->nullable();
            $table->unsignedBigInteger('id_status_transaksi');
            $table->unsignedBigInteger('id_pembayaran')->nullable();

            $table->foreign('id_petani')
            ->references('id_user')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('id_kapasitas')
            ->references('id_kapasitas')
            ->on('kapasitass')
            ->onDelete('cascade');

            $table->foreign('id_pegawai')
            ->references('id_pegawai')
            ->on('pegawais')
            ->onDelete('cascade');

            $table->foreign('id_pembayaran')
            ->references('id_pembayaran')
            ->on('pembayarans')
            ->onDelete('cascade');

            $table->foreign('id_status_transaksi')
            ->references('id_status_transaksi')
            ->on('status_transaksis')
            ->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
