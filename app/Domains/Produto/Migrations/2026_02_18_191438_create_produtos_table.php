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
        Schema::create('produtos', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('nome', 80);
            $table->text('descricao')->nullable();
            $table->string('marca', 50)->nullable();
            $table->string('imagem', 200)->nullable();
            $table->string('ean', 20)->nullable();
            $table->string('sku', 50)->nullable();
            $table->foreignUlid('fabricante_id')->constrained('fabricantes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
