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
        Schema::create('kapasitass', function (Blueprint $table) {
            $table->id('id_kapasitas');
            $table->integer('harga_per_kg');
            $table->foreignId('id_user');
            $table->unsignedBigInteger('id_jenis_kopi');
            $table->integer('kapasitas_maksimum');
            $table->integer('kapasitas_terbaru');
            $table->string('deskripsi');
            $table->timestamps();

            $table->foreign('id_jenis_kopi')
            ->references('id_jenis_kopi')
            ->on('jenis_kopis')
            ->onDelete('cascade');

            $table->foreign('id_user')
            ->references('id_user')
            ->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kapasitass');
    }
};
