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
            $table->bigInteger('id_petani')->constrained('users', 'id_user')->onDelete('cascade');
            $table->bigInteger('id_kapasitas')->constrained('kapasitass', 'id_kapasitas')->onDelete('cascade');
            $table->integer('jumlah_permintaan');
            $table->integer('total_harga');
            $table->date('tanggal_penjemputan')->nullable();
            $table->bigInteger('id_pegawai')->nullable()->constrained('pegawais', 'id_pegawai')->onDelete('cascade');
            $table->bigInteger('id_pembayaran')->nullable()->constrained('pembayarans', 'id_pembayaran')->onDelete('cascade');
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
