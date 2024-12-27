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
        Schema::table('permintaans', function (Blueprint $table) {
            $table->id('id_permintaan');
            $table->bigInteger('id_user')->constrained('users', 'id_user')->onDelete('cascade');
            $table->bigInteger('id_kapasitas')->constrained('kapasitass', 'id_kapasitas')->onDelete('cascade');
            $table->integer('jumlah_permintaan');
            $table->string('id_status_permintaan')->constrained('status_permintaans', 'id_status_permintaan')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Permintaans');
    }
};
