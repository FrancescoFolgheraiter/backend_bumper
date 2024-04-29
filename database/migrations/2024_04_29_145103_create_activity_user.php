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
        Schema::create('activity_user', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('activity_id');
            $table->string('role');
            $table->timestamp('date');
            $table->boolean('check_pay')->nullable()->default(false);
            
            // foreign key che fa riferimento all'ID del piatto nella table "users"
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            // foreign key che fa riferimento all'ID del piatto nella table "activity"
            $table->foreign('activity_id')
            ->references('id')
            ->on('activities')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            
            // primary key composta da dish_id e order_id
            $table->primary(['user_id', 'activity_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_user');
    }
};
