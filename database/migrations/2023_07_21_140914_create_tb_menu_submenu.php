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
        Schema::create('tb_menu_submenu', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_menu_navbar')->unsigned();
            $table->string('nama_sub_menu');
            $table->string('slug')->default(0);
            $table->string('deskripsi');
            $table->string('link');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('tb_menu_submenu');
    }
};
