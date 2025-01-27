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
        Schema::create('video_docs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150)->nullable(false);
            $table->string('file_uri', 150)->nullable(false);
            $table->boolean('status')->default(false);
            $table->unsignedBigInteger('videos_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('videos_id')->references('id')->on('videos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_docs');
    }
};
