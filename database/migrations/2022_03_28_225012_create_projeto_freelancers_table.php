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
        Schema::create('projeto_freelancers', function (Blueprint $table) {
            $table->bigInteger('free_id')->unsigned();
            $table->bigInteger('proj_id')->unsigned();
            $table->foreign('free_id')->references('id')->on('freelancers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('proj_id')->references('id')->on('projectos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('projeto_freelancers');
    }
};
