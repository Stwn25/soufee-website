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
            $table->bigInteger('id_permintaan')->constrained('permintaans', 'id_permintaan')->onDelete('cascade');
            $table->bigInteger('id_pegawai')->constrained('pegawais', 'id_pegawai')->onDelete('cascade');
            $table->date('tanggal_penjemputan');
            $table->bigInteger('id_status_transaksi')->constrained('status_transaksis', 'id_status_transaksi')->onDelete('cascade');
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
