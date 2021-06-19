@component('mail::message')
<h1>Confirme seu cadastro</h1>
Olá {{ $to_name }}, para confirmar o seu cadastro, clique no link abaixo ou copie e cole no navagedor:

<br><br>
@component('mail::panel')
<a href="{{ env('app_url') }}/login?confirm={{ $message }}" class="btn btn-success">{{ env('app_url') }}/login?confirm={{ $message }}</a>
<br>
@endcomponent
<br>

<br>

Obrigado,<br>
Time {{ config('app.name') }}
@endcomponent
