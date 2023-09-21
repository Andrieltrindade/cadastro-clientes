<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('cadastro_clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cnpj_cpf', 200);
            $table->string('rg', 200);
            $table->string('nome', 200);
            $table->string('sexo', 200);
            $table->string('email', 100);
            $table->date('data_de_nascimento');
            $table->string('telefone1', 200);
            $table->string('telefone2', 200);
            $table->string('cep', 300);
            $table->string('logradouro', 150);
            $table->string('numero', 100);
            $table->string('bairro', 150);
            $table->string('cidade', 2000);
            $table->char('uf', 200);
            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cadastro_clientes');
    }
};
