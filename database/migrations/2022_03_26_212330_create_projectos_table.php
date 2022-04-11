<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projectos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('tem_id')->unsigned();
            $table->string('projecto_d');
            $table->enum('tipo', ['monografia', 'artigo', 'revista', 'TFC', 't_investigativo'])->default('monografia');
            $table->enum('acesso', ['publico', 'privado', 'protegido']);
            $table->float('orcamento');
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tem_id')->references('id')->on('temas')->onDelete('cascade')->onUpdate('cascade');
            $table->unique(['user_id', 'tem_id', 'projecto_d', 'tipo', 'acesso', 'orcamento']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projectos');
    }
};
