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
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('ID_BLOG');
            $table->string('SLUG_BLOG');
            $table->string('TITLE_BLOG');
            $table->longText('DESC_BLOG');
            $table->string('MAIN_IMG_BLOG');
            $table->longText('POST_CONTENT_BLOG');
            $table->timestamps();
            $table->unsignedBigInteger('USER_ID');
            $table->foreign('USER_ID')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{}
};
