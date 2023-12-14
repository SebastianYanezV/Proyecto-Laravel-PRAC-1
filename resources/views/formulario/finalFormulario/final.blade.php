@extends('app')

@section('content')

<div class="mb-3" style="margin: 20px; text-align: center;">
    <h2 style="font-weight: bold;">Formulario creado con éxito</h2>
</div>

<div class="mb-3" style="margin: 20px; text-align: center; padding-top: 80px;">
    <a href="{{ route('formulario.show') }}" class="btn btn-secondary">Volver a pestaña de formulario</a>
    <a href="{{ route('registroRespuestasFormularios') }}" class="btn btn-secondary">Ver registro de respuestas de formularios</a>
</div>

@endsection