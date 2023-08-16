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
        Schema::create('tb_module_paket_vps', function (Blueprint $table) {
            $table->id();
            $table->enum('durasi', ["jam", "bulan"]);
            $table->string('nama_paket');
            $table->string('slug', 255);
            $table->string('deskripsi_paket');
            $table->string('harga_paket');
            $table->longText('paket_unggulan');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->dateTime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_module_paket_vps');
    }
};
