<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProperties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('CodigoImovel')->nullable();
            $table->string('DataCadastro')->nullable();
            $table->string('URLGaiaSite')->nullable();
            $table->string('Publicar')->nullable();
            $table->string('TipoImovel')->nullable();
            $table->string('SubTipoImovel')->nullable();
            $table->string('Estado')->nullable();
            $table->string('Cidade')->nullable();
            $table->string('Bairro')->nullable();
            $table->string('BairroOficial')->nullable();
            $table->string('Endereco')->nullable();
            $table->string('Numero')->nullable();
            $table->string('CEP')->nullable();
            $table->string('ComplementoEndereco')->nullable();
            $table->string('PublicaValores')->nullable();
            $table->string('PrecoVenda')->nullable();
            $table->string('PrecoMedioM2Venda')->nullable();
            $table->string('PrecoIptu')->nullable();
            $table->string('PrecoCondominio')->nullable();
            $table->string('AreaUtil')->nullable();
            $table->string('AreaTotal')->nullable();
            $table->string('UnidadeMetrica')->nullable();
            $table->string('ServicoCozinha')->nullable();
            $table->string('VarandaGourmet')->nullable();
            $table->string('Lavabo')->nullable();
            $table->string('ArmarioDormitorio')->nullable();
            $table->string('ArmarioBanheiro')->nullable();
            $table->string('ArmarioSala')->nullable();
            $table->string('ArmarioHomeTheater')->nullable();
            $table->string('ArmarioAreaServico')->nullable();
            $table->string('QtdDormitorios')->nullable();
            $table->string('QtdSuites')->nullable();
            $table->string('QtdBanheiros')->nullable();
            $table->string('QtdVagasCobertas')->nullable();
            $table->string('QtdVagasDescobertas')->nullable();
            $table->string('QtdVagas')->nullable();
            $table->text('Observacao')->nullable();
            $table->string('Agua')->nullable();
            $table->string('ArCondicionado')->nullable();
            $table->string('ArmarioCozinha')->nullable();
            $table->string('Churrasqueira')->nullable();
            $table->string('Esgoto')->nullable();
            $table->string('Piscina')->nullable();
            $table->string('Quintal')->nullable();
            $table->string('AreaServico')->nullable();
            $table->string('EnergiaEletrica')->nullable();
            $table->string('Mobiliado')->nullable();
            $table->string('Exclusividade')->nullable();

            $table->boolean('active')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
