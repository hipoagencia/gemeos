@extends('admin.master.master')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Pedidos</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Início</a></li>
                        <li class="breadcrumb-item active">Pedidos Cadastrados</li>
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
{{--                    <a href="{{ route('admin.orders.create') }}" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i> Novo</a>--}}
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


{{--                    @if($orders)--}}

{{--                        <table class="table table-bordered dt-responsive nowrap w-100">--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th width="3%">#</th>--}}
{{--                                <th>Total</th>--}}
{{--                                <th>Tipo</th>--}}
{{--                                <th>Status</th>--}}
{{--                                <th>Código PagSeguro</th>--}}
{{--                                <th>Usuário</th>--}}
{{--                                <th width="8%">Ações</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}

{{--                            <tbody>--}}
{{--                            @foreach($orders as $order)--}}
{{--                                <tr>--}}
{{--                                    <td>--}}
{{--                                        <a href="{{ route('admin.orders.edit', ['order' => $order->id]) }}">{{ $order->id }}</a>--}}
{{--                                    </td>--}}
{{--                                    <td>R$ {{ $order->total }}</td>--}}
{{--                                    <td><i class="{{ ($order->type == 'BOLETO' ? ' fas fa-money-bill-alt me-1 badge-soft-success' : 'fab fa-cc-visa me-1 badge-soft-warning') }}"></i> {{ $order->type }}</td>--}}
{{--                                    <td><span class="badge bg-{{ ( $order->status == 'Paga' || $order->status == 'Disponível' ? 'success' : 'danger' ) }}">{{ $order->status }}</span></td>--}}
{{--                                    <td>--}}
{{--                                       {{ $order->code }}--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <a href="{{ route('admin.users.edit', ['user' => $order->user->id]) }}">{{ $order->user->name }}</a>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div class="dropdown">--}}
{{--                                            <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                                                <i class="mdi mdi-dots-horizontal font-size-18"></i>--}}
{{--                                            </a>--}}
{{--                                            <ul class="dropdown-menu dropdown-menu-end" style="margin: 0px;">--}}
{{--                                                <li><a href="{{ route('admin.orders.edit', ['order' => $order->id]) }}" class="dropdown-item"><i class="mdi mdi-pen font-size-16 text-success me-1"></i> Editar</a></li>--}}
{{--                                                <form action="{{ route('admin.orders.destroy', ['order' => $order->id]) }}" method="post" onsubmit="if(!confirm('Deseja remover esse registro? Essa ação não pode ser desfeita.')){return false;}">--}}
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

{{--                            {!! $orders->links() !!}--}}

{{--                    @else--}}
{{--                        <h3>Nenhum registro encontrado</h3>--}}
{{--                    @endif--}}


                        <table class="table table-bordered dt-responsive nowrap w-100 yajra-datatable">
                            <thead>
                            <tr>
                                <th width="3%">#</th>
                                <th>Total</th>
                                <th>Tipo</th>
                                <th>Status</th>
                                <th>Código</th>
                                <th>Usuário</th>
                                <th width="8%">Ações</th>
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
                ajax: "{{ route('admin.orders.get') }}",
                order: [ [0, 'desc'] ],
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'total', name: 'total'},
                    {data: 'type', name: 'type'},
                    {data: 'status', name: 'status'},
                    {data: 'code', name: 'code'},
                    {data: 'user_id', name: 'user_id'},
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
