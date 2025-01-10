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
        Schema::create('book_ducuments', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->nullable(false); // Required, max length 100
            $table->string('file_uri')->nullable(false); // Required
            $table->unsignedBigInteger('books_id'); // Foreign key to books table
            $table->boolean('status')->default(true); // Status field with default value as true
            $table->timestamps();
            $table->softDeletes(); // Soft delete column

            // Foreign key constraint
            $table->foreign('books_id')->references('id')->on('books')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_ducuments');
    }
};
