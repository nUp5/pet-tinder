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
    Schema::create('zvirata', function (Blueprint $table) {
        $table->id();
        $table->string('jmeno');
        $table->enum('druh', ['pes', 'kocka', 'jine']);
        $table->integer('vek')->nullable();
        $table->string('plemeno')->nullable();
        $table->text('popis')->nullable();
        $table->string('cesta_k_obrazku')->nullable(); // obrázek uložený lokálně
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
