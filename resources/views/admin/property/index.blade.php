@extends('admin.master.master')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Imóveis</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Início</a></li>
                        <li class="breadcrumb-item active">Imóveis Cadastrados</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    @if(session()->exists('message'))
                        @component('admin.components.message',['type' => session()->get('type')])
                            {{ session()->get('message') }}
                        @endcomponent
                    @endif

                        <table class="table table-bordered dt-responsive nowrap w-100 yajra-datatable">
                            <thead>
                            <tr>
                                <th width="1%">ID</th>
                                <th>Título</th>
                                <th>Tipo</th>
                                <th width="15%">Preço</th>
                                <th width="15%">URL</th>
                                <th width="5%">URL Ingaia</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>

@endsection



@section('js')

    <script type="text/javascript">
        $(function () {
            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.property.get')}}",
                order: [ [0, 'desc'] ],
                columns: [
                    {data: 'CodigoImovel', name: 'CodigoImovel'},
                    {data: 'Endereco', name: 'Endereco'},
                    {data: 'TipoImovel', name: 'TipoImovel'},
                    {data: 'PrecoVenda', name: 'PrecoVenda'},
                    {data: 'Url', name: 'Url'},
                    {data: 'UrlGaiaSite', name: 'UrlGaiaSite'},
                ]
            });
        });
    </script>

@endsection
