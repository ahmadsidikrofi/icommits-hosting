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
        Schema::create('tb_qna', function (Blueprint $table) {
            $table->id();
            $table->string('slug',255);
            $table->enum('kategori', ['Home','Unlimited Hosting','Cloud Hosting Cpanel','Migration Hosting','Domain','VPS','Email Bisnis','Email Hosting','SSL Certificate','CPanel','Promo','Poin']);
            $table->text('pertanyaan');
            $table->text('jawaban');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_qna');
    }
};
