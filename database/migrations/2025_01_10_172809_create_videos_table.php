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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150)->nullable(false); // Required, max length 150
            $table->string('video_uri', 150)->nullable(false); // Required, max length 150
            $table->unsignedBigInteger('lecturers_id'); // Foreign key to lecturers table
            $table->unsignedBigInteger('documents_id'); // Foreign key to documents table
            $table->timestamps();
            $table->softDeletes(); // Soft delete column

            // Foreign key constraints
            $table->foreign('lecturers_id')->references('id')->on('lecturers')->onDelete('cascade');
            $table->foreign('documents_id')->references('id')->on('documents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
