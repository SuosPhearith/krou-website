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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->nullable(false); // Required, max length 100
            $table->text('description')->nullable(); // Optional
            $table->string('cover_uri', 100)->nullable(false); // Required, max length 100
            $table->dateTime('published_date')->nullable(); // Optional
            $table->string('coming_from', 100)->nullable(); // Optional
            $table->string('lecturer', 50)->nullable(false); // Required, max length 50
            $table->string('file_uri', 100)->nullable(false); // Required, max length 100
            $table->boolean('status')->default(true); // Status field with default value as true
            $table->timestamps();
            $table->softDeletes(); // Soft delete column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
