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
        Schema::create('stories_views', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments("id");
            $table->unsignedInteger("stories_id");
            $table->string("slug");
            $table->string("url");
            $table->string("session_id");
            $table->string("user_id")->nullable();
            $table->string("ip");
            $table->string("agent");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stories_views');
    }
};
