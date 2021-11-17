@extends('admin.master.master')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Grupos</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Início</a></li>
                        <li class="breadcrumb-item active">Grupos Cadastrados</li>
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


                <div class="card-body">
                    <form action="{{ route('admin.groups.store') }}" method="POST"
                          autocomplete="false"
                          enctype="multipart/form-data">

                        @csrf

                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab"
                                   aria-selected="true">
                                    <span class="d-block d-sm-none"><i class="fas fa-user"></i></span>
                                    <span class="d-none d-sm-block">Informações</span>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="home1" role="tabpanel">
                                <h3 class="mb-3">Informações</h3>
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nome</label>
                                            <input name="name" class="form-control"
                                                   value="{{ old('name') }}">
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Fatia Inicial (leads)</label>
                                            <select class="form-select" name="shareInitial">
                                                <option>Selecione</option>

                                                @for($x = 1; $x <= 20; $x++)
                                                    <option
                                                        value="{{$x}}" {{ ( old('shareInitial') == $x ? 'selected' : '') }}>
                                                        {{$x}}
                                                    </option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Fatia Final (leads)</label>
                                            <select class="form-select" name="shareFinal">
                                                <option>Selecione</option>

                                                @for($x = 1; $x <= 20; $x++)
                                                    <option
                                                        value="{{$x}}" {{ ( old('shareFinal') == $x ? 'selected' : '') }}>
                                                        {{$x}}
                                                    </option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>


                                </div>


                                <div class="row">

                                    <div class="mb-3">
                                        <label for="description" class="form-label">Descrição</label>
                                        <textarea id="elm1" class="my-editor"
                                                  name="description">{{ old('description') }}</textarea>
                                    </div>


                                </div>


                            </div>


                        </div>


                        <div>
                            <button type="submit" class="btn btn-primary w-md">Inserir</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('js')

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script>

        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('input[name="files[]"]').change(function (files) {

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
