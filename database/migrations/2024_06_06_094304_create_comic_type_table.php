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
        Schema::create('comic_type', function (Blueprint $table) {
           $table->unsignedBigInteger('comic_id');

           $table->foreign('comic_id')
           ->references('id')
           ->on('comics')
           ->cascadeOnDelete();

           $table->unsignedBigInteger('type_id');

           $table->foreign('type_id')
           ->references('id')
           ->on('types')
           ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comic_type');
    }
};
