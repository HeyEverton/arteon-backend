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
        Schema::create('lojas', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('razao_social', 80);
            $table->string('nome_fantasia', 80);
            $table->string('cnpj', 18);
            $table->enum('tipo', ['distribuidora', 'cervejaria']);
            $table->integer('tempo_entrega_min')->nullable();
            $table->integer('tempo_entrega_max')->nullable();
            $table->decimal('valor_minimo', 10, 2)->nullable();
            $table->decimal('taxa_comissao', 5, 2)->nullable();
            $table->string('cep', 9)->nullable();
            $table->string('logradouro', 100)->nullable();
            $table->string('numero', 10)->nullable();
            $table->string('complemento', 30)->nullable();
            $table->string('bairro', 50)->nullable();
            $table->string('cidade', 50)->nullable();
            $table->string('estado', 2)->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->string('logotipo', 200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lojas');
    }
};
