@extends('admin.master.master')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Lead Origem</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Início</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.lead-source.index') }}">Lead Origens
                                Cadastrados</a>
                        </li>
                        <li class="breadcrumb-item active">Editar</li>
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
                    <form action="{{ route('admin.lead-source.update', ['lead_source' => $lead_source->id]) }}" method="POST"
                          autocomplete="false"
                          enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $lead_source->id }}">

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
                                                   value="{{ old('name') ?? $lead_source->name }}">
                                        </div>
                                    </div>

                                </div>

                            </div>


                        </div>


                        <div>
                            <button type="submit" class="btn btn-primary w-md">Alterar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

