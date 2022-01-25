<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarImages;
use App\Models\Property;
use App\Models\PropertyImages;
use Illuminate\Http\Request;

class FunctionsController extends Controller
{
    public function carStock()
    {
        $url = env('DS_URL');
        $xml = simplexml_load_file($url, null, LIBXML_NOCDATA);

        //dd($xml);
        Car::query()->delete();

        $total = 0;

        foreach ($xml->veiculo as $veiculo) {
            $total++;

            $comple = '';
            $opci = '';
            $acces = '';

            foreach ($veiculo->opcionais->opcional as $opcional) {
                $opci .= $opcional . ', ';
            }

            foreach ($veiculo->complementos->complemento as $complemento) {
                $comple .= $complemento . ', ';
            }

            foreach ($veiculo->acessorios->acessorio as $acessorio) {
                $acces .= $acessorio . ', ';
            }

            //Cadastra o imóvel
            $veiculos = Car::firstOrCreate([
                'idStock' => $veiculo->id,
                'tipoveiculo' => $veiculo->tipoveiculo,
                'zerokm' => ($veiculo->zerokm == 'S' ? '1' : '0'),
                'placa' => $veiculo->placa,
                'marca' => $veiculo->marca,
                'modelo' => $veiculo->modelo,
                'versao' => $veiculo->versao,
                'tipomotor' => $veiculo->tipomotor,
                'anofabricacao' => $veiculo->anofabricacao,
                'anomodelo' => $veiculo->anomodelo,
                'cambio' => $veiculo->cambio,
                'km' => $veiculo->km,
                'portas' => $veiculo->portas,
                'cor' => $veiculo->cor,
                'combustivel' => $veiculo->combustivel,
                'carroceria' => $veiculo->carroceria,
                'preco' => $veiculo->preco,
                'observacao' => $veiculo->observacao,
                'complementos' => $comple,
                'opcionais' => $opci,
                'acessorios' => $acces,
                'urlVideo' => $veiculo->urlVideo,
                'slug' => ' ',
                'categoryslug' => ' ',
            ]);

            //Cadastra as imagens
            foreach ($veiculo->fotos->foto as $foto) {
                CarImages::firstOrCreate([
                    'url' => $foto,
                    'car' => $veiculos->id
                ]);
            }
        }

        $mensagem = "Estoque atualizado com sucesso! $total veículos foram inseridos.";

        return redirect()->route('admin.dashboard')->with(['type' => 'success', 'message' => $mensagem]);
    }

    public function sitemap()
    {
        \Spatie\Sitemap\SitemapGenerator::create(env('APP_URL'))->writeToFile(public_path('sitemap.xml'));

        return redirect()->route('admin.dashboard')->with(['type' => 'success', 'message' => 'Site Map gerado com sucesso!']);
    }
}
