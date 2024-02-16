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
        Schema::create('aboutme', function (Blueprint $table) {
            $table->id();
            $table->longText('title');
            $table->longText('description');
            $table->longText('story');
            $table->longtext('image_thumb');
            $table->longtext('avatar');
            $table->string('url_github');
            $table->string('url_linkedin');
            $table->string('url_instagram');
            $table->string('url_twitter');
            $table->string('email');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->string('deleted_at');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aboutme');
    }
};