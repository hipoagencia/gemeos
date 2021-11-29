@extends('admin.master.master')

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Leads</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Início</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.leads.index') }}">Leads Cadastrados</a>
                        </li>
                        <li class="breadcrumb-item active">Novo</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">

                @if($errors->all())
                    @foreach($errors->all() as $error)
                        @component('admin.components.message',['type' => 'danger'])
                            {{ $error }}
                        @endcomponent
                    @endforeach
                @endif

                @if(session()->exists('message'))
                    @component('admin.components.message',['type' => session()->get('type')])
                        {{ session()->get('message') }}
                    @endcomponent
                @endif


                <div class="card-body">
                    <form action="{{ route('admin.leads.update', ['lead' => $lead->id]) }}" method="POST"
                          autocomplete="false"
                          enctype="multipart/form-data">


                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $lead->id }}">

                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab"
                                   aria-selected="true">
                                    <span class="d-block d-sm-none"><i class="fas fa-user"></i></span>
                                    <span class="d-none d-sm-block">Informações</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#messages1" role="tab">
                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                    <span class="d-none d-sm-block">Anotações</span>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="home1" role="tabpanel">
                                <h3 class="mb-3">Informações</h3>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nome</label>
                                            <input name="name" class="form-control"
                                                   value="{{ old('name') ?? $lead->name }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input name="email" class="form-control" id="form-row-email-input"
                                                   value="{{ old('email') ?? $lead->email }}">
                                        </div>
                                    </div>


                                    {{--                                    <div class="col-lg-2">--}}
                                    {{--                                        <div class="mb-3">--}}
                                    {{--                                            <label for="group_id" class="form-label">Grupo</label>--}}
                                    {{--                                            <select name="group_id" class="form-select">--}}
                                    {{--                                                <option selected>Escolha...</option>--}}
                                    {{--                                                @foreach($groups as $group)--}}
                                    {{--                                                    <option value="{{ $group->id }}" {{ ( $user->group_id == $group->id ? 'selected' : ( old('group_id') == $group->id ? 'selected' : '' ) ) }}>{{ $group->name }}</option>--}}
                                    {{--                                                @endforeach--}}
                                    {{--                                            </select>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}


                                </div>

                                <div class="row">


                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="date_of_birth" class="form-label">Data de Nascimento</label>
                                            <input name="date_of_birth" class="form-control" type="date"
                                                   value="{{ date('Y-m-d', strtotime(old('date_of_birth') )) ??  date('Y-m-d', strtotime($lead->date_of_birth)) }}"
                                                   id="example-date-input">

                                        </div>
                                    </div>


                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="telephone" class="form-label">Telefone</label>
                                            <input name="telephone" id="input-mask" class="form-control input-mask"
                                                   data-inputmask="'mask': '(99) 999999999'" im-insert="true"
                                                   value="{{ old('telephone') ?? $lead->telephone }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="cell" class="form-label">Celular</label>
                                            <input name="cell" id="input-mask" class="form-control input-mask"
                                                   data-inputmask="'mask': '(99) 999999999'" im-insert="true"
                                                   value="{{ old('cell') ?? $lead->cell }}">
                                        </div>
                                    </div>

                                </div>

                                <h3 class="mb-3">Referência</h3>

                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="product_id" class="form-label">Produto</label>
                                            <select name="product_id" class="form-select" {{ ($lead->product_id == null ? 'disabled' : '') }}>
                                                <option selected>Escolha...</option>
                                                @foreach($products as $product)
                                                    <option
                                                        value="{{ $product->id }}" {{ (old('product_id') ? 'selected' : ($lead->product_id == $product->id ? 'selected' : '')) }}>{{ $product->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="product_text" class="form-label">Produto Escrito</label>
                                            <input name="product_text" class="form-control" id="form-row-email-input"
                                                   value="{{ old('product_text') ?? $lead->product_text }}" {{ ($lead->product_id != null ? 'disabled' : '') }}>
                                        </div>
                                    </div>


                                    {{--                                    <div class="col-lg-2">--}}
                                    {{--                                        <div class="mb-3">--}}
                                    {{--                                            <label for="group_id" class="form-label">Grupo</label>--}}
                                    {{--                                            <select name="group_id" class="form-select">--}}
                                    {{--                                                <option selected>Escolha...</option>--}}
                                    {{--                                                @foreach($groups as $group)--}}
                                    {{--                                                    <option value="{{ $group->id }}" {{ ( $user->group_id == $group->id ? 'selected' : ( old('group_id') == $group->id ? 'selected' : '' ) ) }}>{{ $group->name }}</option>--}}
                                    {{--                                                @endforeach--}}
                                    {{--                                            </select>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}


                                </div>

                            </div>


                            <div class="tab-pane" id="messages1" role="tabpanel">
                                <h3 class="mb-3">Anotações</h3>
                                <div class="row">


                                    <div class="mb-3 mt-3">
                                        <textarea id="elm1" class="my-editor"
                                                  name="description">{{ old('description') ?? $lead->description }}</textarea>
                                    </div>


                                </div>
                            </div>
                        </div>


                        <div>
                            <button type="submit" class="btn btn-primary w-md">Alterar</button>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>

    </div>

@endsection


@section('js')
    <script>


        $(function () {

            $('input[name="cover"]').change(function (files) {

                $('.content_image').text('');

                $.each(files.target.files, function (key, value) {
                    var reader = new FileReader();
                    reader.onload = function (value) {
                        $('.content_image').append(
                            '<div class="col-md-4">' +
                            '<img class="img-fluid" ' +
                            'src="' + value.target.result + '">' +
                            '</img>' +
                            '</div>');
                    };
                    reader.readAsDataURL(value);
                });
            });


        });
    </script>
@endsection
