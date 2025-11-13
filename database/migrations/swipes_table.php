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
    Schema::create('swipes', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('swiper_id'); // kdo swipuje
        $table->unsignedBigInteger('swiped_id'); // koho swipuje
        $table->boolean('liked'); // true = like, false = dislike
        $table->timestamps();

        $table->foreign('swiper_id')->references('id')->on('pets')->onDelete('cascade');
        $table->foreign('swiped_id')->references('id')->on('pets')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('swipes');
    }
};
