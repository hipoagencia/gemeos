<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\PropertyImages;
use Illuminate\Http\Request;

class FunctionsController extends Controller
{
    public function ingaiaProperties()
    {
        $url = env('INGAIA_URL');
        $xml = simplexml_load_file($url, null, LIBXML_NOCDATA);

        //Cria a coleção para marcar como ativo
        $ids = collect([]);

        foreach ($xml->Imoveis->Imovel as $imovel){

            //Adiciona o ID do Imóvel em uma coleção
            $ids->push($imovel->CodigoImovel);

            //Cadastra o imóvel
            $property = Property::firstOrCreate([
                'CodigoImovel' => $imovel->CodigoImovel,
                'DataCadastro' => $imovel->DataCadastro,
                'URLGaiaSite' => $imovel->URLGaiaSite,
                'Publicar' => $imovel->Publicar,
                'TipoImovel' => $imovel->TipoImovel,
                'SubTipoImovel' => $imovel->SubTipoImovel,
                'Estado' => $imovel->Cidade,
                'Bairro' => $imovel->Bairro,
                'BairroOficial' => $imovel->BairroOficial,
                'Endereco' => $imovel->Endereco,
                'Numero' => $imovel->Numero,
                'CEP' => $imovel->CEP,
                'ComplementoEndereco' => $imovel->ComplementoEndereco,
                'PublicaValores' => $imovel->PublicaValores,
                'PrecoVenda' => $imovel->PrecoVenda,
                'PrecoMedioM2Venda' => $imovel->PrecoMedioM2Venda,
                'PrecoIptu' => $imovel->PrecoIptu,
                'PrecoCondominio' => $imovel->PrecoCondominio,
                'AreaUtil' => $imovel->AreaUtil,
                'AreaTotal' => $imovel->AreaTotal,
                'UnidadeMetrica' => $imovel->UnidadeMetrica,
                'ServicoCozinha' => $imovel->ServicoCozinha,
                'VarandaGourmet' => $imovel->VarandaGourmet,
                'Lavabo' => $imovel->Lavabo,
                'ArmarioDormitorio' => $imovel->ArmarioDormitorio,
                'ArmarioBanheiro' => $imovel->ArmarioBanheiro,
                'ArmarioSala' => $imovel->ArmarioSala,
                'ArmarioHomeTheater' => $imovel->ArmarioHomeTheater,
                'ArmarioAreaServico' => $imovel->ArmarioAreaServico,
                'QtdDormitorios' => $imovel->QtdDormitorios,
                'QtdSuites' => $imovel->QtdSuites,
                'QtdBanheiros' => $imovel->QtdBanheiros,
                'QtdVagasCobertas' => $imovel->QtdVagasCobertas,
                'QtdVagasDescobertas' => $imovel->QtdVagasDescobertas,
                'QtdVagas' => $imovel->QtdVagas,
                'Observacao' => $imovel->Observacao,
                'Agua' => $imovel->Agua,
                'ArCondicionado' => $imovel->ArCondicionado,
                'ArmarioCozinha' => $imovel->ArmarioCozinha,
                'Churrasqueira' => $imovel->Churrasqueira,
                'Esgoto' => $imovel->Esgoto,
                'Piscina' => $imovel->Piscina,
                'Quintal' => $imovel->Quintal,
                'AreaServico' => $imovel->AreaServico,
                'EnergiaEletrica' => $imovel->EnergiaEletrica,
                'Mobiliado' => $imovel->Mobiliado,
                'Exclusividade' => $imovel->Exclusividade,
            ]);

            //Cadastra as imagens
            foreach ($imovel->Fotos->Foto as $foto) {
                PropertyImages::firstOrCreate([
                    'url' => $foto->URLArquivo,
                    'cover' => ($foto->Principal == '1' ? 1 : 0),
                    'property' => $property->id
                ]);
            }

        }

        //Deixa todos os imóveis como ativo  = 0
        $inativos = Property::orderBy('id');
        $inativos->update(['active' => '0']);

        //Marca is imóveis atuais como ativo = 1
        $ativos = Property::whereIn('CodigoImovel', $ids->all());
        $ativos->update(['active' => '1']);

        return redirect()->route('admin.dashboard')->with(['type' => 'success', 'message' => 'Imóveis atualizados com sucesso!']);
    }

    public function sitemap()
    {
        \Spatie\Sitemap\SitemapGenerator::create(env('APP_URL'))->writeToFile(public_path('sitemap.xml'));

        return redirect()->route('admin.dashboard')->with(['type' => 'success', 'message' => 'Site Map gerado com sucesso!']);
    }
}
