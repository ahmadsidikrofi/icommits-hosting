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
        Schema::create('tb_module_hosting_unlimited', function (Blueprint $table) {
            $table->id();
            $table->enum('durasi', ["jam", "bulan"]);
            $table->string('nama_paket');
            $table->string('slug', 255);
            $table->string('deskripsi_paket');
            $table->string('harga_paket');
            $table->string('paket_unggulan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_module_hosting_unlimited');
    }
};
