@extends('layout.app')
@section('content')

<div class="container">
    <p>
        @foreach ($logs as $log)

            <p>Evento: {{$log -> $event}} -- Fecha: <b><i> {{ date('h:i') strtotime ($log -> create_at) }}</i></b></p>

        @endforeach
    </p>
</div>

@endsection