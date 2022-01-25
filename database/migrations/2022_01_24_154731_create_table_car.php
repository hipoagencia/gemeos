<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('idStock');
            $table->string('tipoveiculo');
            $table->boolean('zerokm');
            $table->string('placa');
            $table->string('marca');
            $table->string('modelo');
            $table->string('versao');
            $table->string('tipomotor');
            $table->string('anofabricacao');
            $table->string('anomodelo');
            $table->string('cambio');
            $table->integer('km');
            $table->integer('portas');
            $table->string('cor');
            $table->string('combustivel');
            $table->string('carroceria');
            $table->string('preco');
            $table->text('observacao');
            $table->text('complementos');
            $table->text('opcionais');
            $table->text('acessorios');
            $table->string('urlVideo');
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
        Schema::dropIfExists('cars');
    }
}
