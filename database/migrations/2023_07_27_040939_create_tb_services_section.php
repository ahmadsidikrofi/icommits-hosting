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
        Schema::create('tb_services_section', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_menu_navbar')->nullable();
            $table->unsignedBigInteger('id_submenu_navbar')->nullable();
            $table->string('section_title')->nullable();
            $table->string('services_title');
            $table->string('slug')->nullable();
            $table->string('services_deskripsi')->nullable();
            $table->string('services_price');
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
        Schema::dropIfExists('tb_services_section');
    }
};
