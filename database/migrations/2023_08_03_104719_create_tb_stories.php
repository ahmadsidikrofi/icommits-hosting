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
        Schema::create('tb_stories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_menu_navbar')->nullable();
            $table->unsignedBigInteger('id_submenu_navbar')->nullable();
            $table->string('section_title')->nullable();
            $table->string('stories_title');
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->longText('deskripsi')->nullable();
            $table->longText('isi_stories')->nullable();
            $table->longText('count_stories')->nullable();
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
        Schema::dropIfExists('tb_stories');
    }
};
