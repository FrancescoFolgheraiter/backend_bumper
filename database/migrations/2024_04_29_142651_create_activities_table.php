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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->timestamp('start_date');
            $table->timestamp('end_date')->nullable();
            $table->text('description');
            $table->unsignedTinyInteger('min_number')->nullable();
            $table->unsignedTinyInteger('max_number')->nullable();
            $table->unsignedInteger('price')->nullable();
            $table->string('address', 255);
            $table->text('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
