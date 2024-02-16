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
        Schema::create('galery_posts', function (Blueprint $table) {
            $table->id();
            $table->longText('file_path');
            $table->string('post_id');
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
        Schema::dropIfExists('galery_posts');
    }
};