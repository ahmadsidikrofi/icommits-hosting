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
        Schema::create('tb_menu_navbar', function (Blueprint $table) {
            $table->id();
            $table->string('nama_menu');
            $table->string('slug');
            $table->enum('tipe_menu', ["link", "sub_menu"]);
            $table->string('link')->nullable();
            $table->integer('urutan')->nullable();
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
        Schema::dropIfExists('tb_menu_navbar');
    }
};
