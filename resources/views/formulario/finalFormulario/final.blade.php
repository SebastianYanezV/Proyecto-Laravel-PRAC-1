@extends('app')

@section('content')

<div class="mb-3">
    <h2 style="font-weight: bold;">Formulario creado con éxito</h2>
    <p>Pulse <a href="{{ route('formulario.show') }}">aquí</a> para crear otro formulario.</p>
    <p>Pulse <a href="{{ route('registroRespuestasFormularios') }}">aquí</a> para ver el registro de respuestas de formularios.</p>
</div>

@endsection