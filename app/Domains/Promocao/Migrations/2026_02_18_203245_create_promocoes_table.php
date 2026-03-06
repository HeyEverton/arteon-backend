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
        Schema::create('promocoes', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('titulo', 80);
            $table->text('descricao')->nullable();
            $table->decimal('preco_promocional', 12, 2)->nullable();
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->boolean('ativo')->nullable();
            $table->foreignUlid('produto_id')->constrained('produtos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promocoes');
    }
};
