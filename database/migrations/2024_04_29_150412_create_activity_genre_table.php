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
        Schema::create('activity_genre', function (Blueprint $table) {
            $table->unsignedBigInteger('activity_id');
            $table->foreign('activity_id')
                ->references('id')
                ->on('activities')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id')
                ->references('id')
                ->on('genres')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->primary(['activity_id', 'genre_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_genre');
    }
};
