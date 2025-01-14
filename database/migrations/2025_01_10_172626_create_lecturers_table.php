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
        Schema::create('lecturers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable(false); // Required, max length 100
            $table->string('coming_from', 150)->nullable(false); // Required, max length 150
            $table->boolean('status')->default(false); // Status field with default value false
            $table->unsignedBigInteger('documents_id'); // Foreign key to documents table
            $table->timestamps();
            $table->softDeletes(); // Soft delete column

            // Foreign key constraint
            $table->foreign('documents_id')->references('id')->on('documents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecturers');
    }
};
