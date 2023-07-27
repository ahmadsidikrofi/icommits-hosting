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
        Schema::create('tb_promo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_menu_navbar')->nullable();
            $table->unsignedBigInteger('id_submenu_navbar')->nullable();
            $table->string('slug');
            $table->string('mini_title');
            $table->string('title_promo');
            $table->string('link_promo')->nullable();
            $table->string('image')->nullable();
            $table->timestamp('expired_at')->nullable();
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
        Schema::dropIfExists('tb_promo');
    }
};
