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
    Schema::create('matches', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('pet_one_id');
        $table->unsignedBigInteger('pet_two_id');
        $table->timestamps();

        $table->foreign('pet_one_id')->references('id')->on('pets')->onDelete('cascade');
        $table->foreign('pet_two_id')->references('id')->on('pets')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
