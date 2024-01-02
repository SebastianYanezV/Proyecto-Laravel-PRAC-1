@extends('app')

@section('content')
    <h2 style="font-weight: bold; text-align: center; margin: 20px">Registro de respuestas de formularios</h2>

    <ul class="list-group">
        <li class="list-group-item">
            <div class="row">
                <div class="col-md-1">
                    ID
                </div>
                <div class="col-md-2">
                    Nombre
                </div>
                <div class="col-md-2">
                    Email
                </div>
                <div class="col-md-1">
                    Género
                </div>
                <div class="col-md-1">
                    Satisfacción
                </div>
                <div class="col-md-2">
                    Comentarios
                </div>
                <div class="col-md-1">
                    Acciones
                </div>
            </div>
        </li>

        @foreach($formularios as $index => $formulario)
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-1">
                        {{ $index + 1 }}
                    </div>
                    <div class="col-md-2">
                        {{ $formulario->Nombre }}
                    </div>
                    <div class="col-md-2">
                        {{ $formulario->Email }}
                    </div>
                    <div class="col-md-1">
                        {{ $formulario->Genero }}
                    </div>
                    <div class="col-md-1">
                        {{ $formulario->Satisfaccion }}
                    </div>
                    <div class="col-md-2">
                        {{ $formulario->Comentarios }}
                    </div>
                    <div class="col-md-1">
                        <a href="{{ route('forms.edit', $formulario->id) }}" class="btn btn-secondary">Editar</a>
                    </div>
                    <div class="col-md-1">
                        <form action="{{ route('forms.destroy', $formulario->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Está seguro de que quiere eliminar este formulario? Esta acción es permanente.')">Eliminar</button>
                        </form>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endsection