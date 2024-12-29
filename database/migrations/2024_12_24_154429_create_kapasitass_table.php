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
            $table->foreignId('id_user')->constrained('users', 'id_user')->onDelete('cascade');
            $table->bigInteger('id_jenis_kopi')->constrained('jenis_kopis', 'id_jenis_kopi')->onDelete('cascade');
            $table->integer('kapasitas_maksimum');
            $table->integer('kapasitas_terbaru');
            $table->string('deskripsi');
            $table->timestamps();
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
