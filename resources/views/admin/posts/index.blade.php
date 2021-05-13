@extends('admin.master.master')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Posts</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Início</a></li>
                        <li class="breadcrumb-item active">Posts Cadastrados</li>
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
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i> Novo</a>
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

                    @if(!empty($posts))

                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Autor</th>
                                <th>Categoria</th>
                                <th width="8%">Ações</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>
                                        <a href="{{ route('admin.posts.edit', ['post' => $post->id]) }}">{{ $post->name }}</a>
                                    </td>
                                    <td><a href="{{ route('admin.users.edit', ['user' => $post->author()->first()->id]) }}" class="href">{{ $post->author()->first()->name }} {{ $post->author()->first()->last_name }}</a></td>
                                    <td>
                                        @if($post->categories()->get())
                                            @foreach($post->categories()->get() as $category)
                                                @if($loop->iteration === $loop->count)
                                                    {{ $category->name }}
                                                @else
                                                    {{ $category->name }},
                                                @endif
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end" style="margin: 0px;">
                                                <form action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="post" onsubmit="if(!confirm('Deseja remover esse registro? Essa ação não pode ser desfeita.')){return false;}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <li><button type="submit" class="dropdown-item"><i class="mdi mdi-trash-can font-size-16 text-danger me-1"></i> Deletar</button></li>
                                                </form>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    @else
                        <h3>Nenhum registro encontrado</h3>
                    @endif


                </div>
            </div>
        </div>
    </div>

@endsection
