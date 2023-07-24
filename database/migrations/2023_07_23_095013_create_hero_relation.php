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
        Schema::create('hero_relation', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_menu_navbar')->unsigned()->nullable();
            $table->bigInteger('id_submenu_navbar')->unsigned()->nullable();
            $table->bigInteger('id_hero')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_relation');
    }
};
