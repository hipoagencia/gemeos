<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table = "properties";

    protected $fillable = [
        'CodigoImovel',
        'DataCadastro',
        'URLGaiaSite',
        'Publicar',
        'TipoImovel',
        'SubTipoImovel',
        'Estado',
        'Cidade',
        'Bairro',
        'BairroOficial',
        'Endereco',
        'Numero',
        'CEP',
        'ComplementoEndereco',
        'PublicaValores',
        'PrecoVenda',
        'PrecoMedioM2Venda',
        'PrecoIptu',
        'PrecoCondominio',
        'AreaUtil',
        'AreaTotal',
        'UnidadeMetrica',
        'ServicoCozinha',
        'VarandaGourmet',
        'Lavabo',
        'ArmarioDormitorio',
        'ArmarioBanheiro',
        'ArmarioSala',
        'ArmarioHomeTheater',
        'ArmarioAreaServico',
        'QtdDormitorios',
        'QtdSuites',
        'QtdBanheiros',
        'QtdVagasCobertas',
        'QtdVagasDescobertas',
        'QtdVagas',
        'Observacao',
        'Agua',
        'ArCondicionado',
        'ArmarioCozinha',
        'Churrasqueira',
        'Esgoto',
        'Piscina',
        'Quintal',
        'AreaServico',
        'EnergiaEletrica',
        'Mobiliado',
        'Exclusividade',
    ];

    public function img()
    {
        return $this->hasMany(PropertyImages::class, 'property');
    }

    public function cover()
    {
        return $this->hasMany(PropertyImages::class, 'property')->where('cover', '1');
    }

    public function getPrecoVendaAttribute($value)
    {
        return number_format($value, 2, ',', '.');

    }
}
