@extends('admin.master.master')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Produtos</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Início</a></li>
                        <li class="breadcrumb-item active">Produtos Cadastrados</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="row mb-2">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-8">
                <div class="text-sm-end">
                    <a href="{{ route('admin.products.create') }}" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i> Novo</a>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    @if(session()->exists('message'))
                        @component('admin.components.message',['type' => session()->get('type')])
                            {{ session()->get('message') }}
                        @endcomponent
                    @endif

{{--                    @if($products)--}}

{{--                        <table class="table table-bordered dt-responsive nowrap w-100">--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th width="3%">#</th>--}}
{{--                                <th>Nome</th>--}}
{{--                                <th>Preço</th>--}}
{{--                                <th>Categoria</th>--}}
{{--                                <th>Ativo</th>--}}
{{--                                <th width="8%">Ações</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}

{{--                            <tbody>--}}
{{--                            @foreach($products as $product)--}}
{{--                                <tr>--}}
{{--                                    <td>{{ $product->id }}</td>--}}
{{--                                    <td>--}}
{{--                                        <a href="{{ route('admin.products.edit', ['product' => $product->id]) }}">{{ $product->name }}</a>--}}
{{--                                    </td>--}}
{{--                                    <td>R$ {{ $product->price }}</td>--}}
{{--                                    <td>--}}
{{--                                        @if($product->categories)--}}
{{--                                            @foreach($product->categories as $category)--}}
{{--                                                @if($loop->iteration === $loop->count)--}}
{{--                                                    {{ $category->name }}--}}
{{--                                                @else--}}
{{--                                                    {{ $category->name }},--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        @endif--}}
{{--                                    </td>--}}
{{--                                    <td><span class="badge bg-{{ ( $product->status == 1 ? 'success' : 'danger' ) }}">{{ ( $product->status == 1 ? 'Ativo' : 'Inativo' ) }}</span></td>--}}
{{--                                    <td>--}}
{{--                                        <div class="dropdown">--}}
{{--                                            <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                                                <i class="mdi mdi-dots-horizontal font-size-18"></i>--}}
{{--                                            </a>--}}
{{--                                            <ul class="dropdown-menu dropdown-menu-end" style="margin: 0px;">--}}
{{--                                                <li><a href="{{ route('admin.products.edit', ['product' => $product->id]) }}" class="dropdown-item"><i class="mdi mdi-pen font-size-16 text-success me-1"></i> Editar</a></li>--}}
{{--                                                <form action="{{ route('admin.products.destroy', ['product' => $product->id]) }}" method="post" onsubmit="if(!confirm('Deseja remover esse registro? Essa ação não pode ser desfeita.')){return false;}">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('DELETE')--}}
{{--                                                    <li><button type="submit" class="dropdown-item"><i class="mdi mdi-trash-can font-size-16 text-danger me-1"></i> Deletar</button></li>--}}
{{--                                                </form>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}

{{--                            </tbody>--}}
{{--                        </table>--}}

{{--                            {!! $products->links() !!}--}}

{{--                    @else--}}
{{--                        <h3>Nenhum registro encontrado</h3>--}}
{{--                    @endif--}}

                        <table class="table table-bordered dt-responsive nowrap w-100 yajra-datatable">
                            <thead>
                            <tr>
                                <th width="1%">ID</th>
                                <th>Título</th>
                                <th>Categorias</th>
                                <th width="15%">Preço</th>
                                <th width="15%">Status</th>
                                <th width="5%">Ação</th>
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
                ajax: "{{ (\Illuminate\Support\Facades\Route::currentRouteName() == 'admin.products.index' ? route('admin.products.get') : route('admin.products.plans.get'))  }}",
                order: [ [0, 'desc'] ],
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'categories', name: 'categories'},
                    {data: 'price', name: 'price'},
                    {data: 'status', name: 'status'},
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });
    </script>

@endsection
