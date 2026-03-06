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
        Schema::create('fabricantes', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('razao_social', 80);
            $table->string('nome_fantasia', 80);
            $table->string('cnpj', 18)->unique();
            $table->string('email', 100)->nullable()->unique();
            $table->string('telefone', 20)->nullable();
            $table->boolean('ativo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fabricantes');
    }
};
