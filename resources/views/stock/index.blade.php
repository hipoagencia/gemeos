<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8"/>
    <title>{{ env('APP_NAME') }} - Entre com a sua conta!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="HipoAgência" name="author"/>

    <link rel="shortcut icon" href="{{ url(asset(env('INFO_FAVICON'))) }}">

    <link href="{{ url(asset('backend/assets/css/icons.min.css')) }}" rel="stylesheet" type="text/css">

    <link href="{{ url(asset('backend/assets/css/bootstrap.min.css')) }}" id="bootstrap-style" rel="stylesheet"
          type="text/css"/>
    <link href="{{ url(asset('backend/assets/css/app.min.css')) }}" id="app-style" rel="stylesheet" type="text/css"/>

    <meta name="csrf-token" content="{{ csrf_token() }}"/>
</head>
<body>


<div class="container-fluid">
    <div class="row">

        <div class="table-responsive">
            <table class="table table-striped mb-0">
                <tbody>

                <span style="display: none;">{{$num = 1}}</span>

                @for($i = 0; $i < count($cars); $i++)

                    <?php

                    $id = $cars[$i]->id;
                    $marca = $cars[$i]->marca;
                    $row = '';

                    if ($i > 0) {
                        if ($cars[$i - 1]->marca == $cars[$i]->marca) {
                            $marca = '-';
                        } else {
                            $marca = $cars[$i]->marca;
                            $row = '1';
                        }
                    }

                    $modelo = $cars[$i]->modelo . ' ' . $cars[$i]->versao;
                    $ano = $cars[$i]->anomodelo;
                    $anoFabric = $cars[$i]->anofabricacao;
                    $km = $cars[$i]->km;
                    $complementos = explode(', ', substr($cars[$i]->complementos, 0, -2));
                    $observacoes = explode('!!!', $cars[$i]->observacao);
                    $preco = $cars[$i]->preco;
                    $cor = $cars[$i]->cor;
                    $cambio = ($cars[$i]->cambio == 'Automático' ? 'Aut.' : '');

                    ?>

                    <tr style="{{ ($row === '1' ? 'border-top:3px #686868 solid' : '') }}">
                        <th scope="row">{{$num++}}</th>
                        <td><b>{{$marca}}</b></td>
                        <td>{{$modelo}} {{$cambio}}</td>
                        <td>{{ $anoFabric }} / {{$ano}}</td>
                        <td>{{$cor}}</td>
                        <td>{{$km}} km</td>
                        <td>
                            @for($x = 0; $x < count($complementos); $x++)
                                @if($complementos[$x] == 'Garantia de fábrica')
                                    GF -
                                @endif
                                @if($complementos[$x] == 'Revisões na concessionária')
                                    RC -
                                @endif
                                @if($complementos[$x] == 'Único dono')
                                    U/D -
                                @endif
                                @if($complementos[$x] == 'IPVA Pago')
                                    IPVA -
                                @endif
                            @endfor
                        </td>
                        <td>{{ (isset($observacoes[1]) ? trim($observacoes[1]) : '') }}</td>
                        <td>{{$preco}}</td>
                    </tr>
                @endfor

                </tbody>
            </table>
        </div>

    </div>
</div>

<style>
    *{
        line-height: 13px;
    }
</style>

<script src="{{ url(asset('backend/assets/libs/jquery/jquery.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/metismenu/metisMenu.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/simplebar/simplebar.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/node-waves/waves.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/js/app.js')) }}"></script>

</body>
</html>


