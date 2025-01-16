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
        Schema::create('worksheets', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->nullable(false); 
            $table->text('description')->nullable(); 
            $table->string('cover_uri', 100)->nullable(false); 
            $table->dateTime('published_date')->nullable(false); 
            $table->string('coming_from', 100)->nullable(true); 
            $table->string('lecturer', 50)->nullable(true);
            $table->string('file_uri', 100)->nullable(true); 
            $table->boolean('status')->default(false); 
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('worksheets');
    }
};
