<!doctype html>
<html class="no-js" lang="pt-br">
<head>

    <title>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />

    <link rel="shortcut icon" href="{{ url(asset(env('INFO_FAVICON'))) }}">

    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    {!! \Artesaos\SEOTools\Facades\SEOTools::generate() !!}

</head>

<body>


@include('web.includes.header')

@yield('content')

@include('web.includes.footer')


@hasSection('js')
    @yield('js')
@endif

</body>
</html>
