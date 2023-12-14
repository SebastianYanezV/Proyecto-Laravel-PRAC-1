@extends('app')

@section('content')
    <h2 style="font-weight: bold; text-align: center; margin: 20px">Registro de respuestas de formularios</h2>

    <ul class="list-group">
        @foreach($formularios as $index => $formulario)
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-1">
                        ID: {{ $index + 1 }}
                    </div>
                    <div class="col-md-2">
                        Nombre: {{ $formulario->Nombre }}
                    </div>
                    <div class="col-md-2">
                        Email: {{ $formulario->Email }}
                    </div>
                    <div class="col-md-2">
                        Descripcion: {{ $formulario->Descripcion }}
                    </div>
                    <div class="col-md-2">
                        Opcion: {{ $formulario->Opcion }}
                    </div>
                    <div class="col-md-1">
                        <a href="{{ route('formulario.edit', $formulario->id) }}" class="btn btn-secondary">Editar</a>
                    </div>
                    <div class="col-md-1">
                        <form action="{{ route('formulario.destroy', $formulario->id) }}" method="post">
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