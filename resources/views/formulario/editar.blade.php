@extends('app')

@section('content')
    <h2 style="font-weight: bold; text-align: center; margin: 20px">Editar Formulario</h2>

    <form action="{{ route('formulario.update', $formulario->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div style="margin: 20px">
            <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Correo Electrónico *</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com" name="email" value="{{ $formulario->Email }}" required>
        </div>

        <div style="margin: 20px">
            <label for="exampleFormControlInput2" class="form-label" style="font-weight: bold;">Nombre completo *</label>
            <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Nombre Apellido" name="nombre" value="{{ $formulario->Nombre }}" required>
        </div>

        <div style="margin: 20px">
            <label for="exampleFormControlInput3" class="form-label" style="font-weight: bold;">Descripción</label>
            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Texto" name="descripcion" value="{{ $formulario->Descripcion ?? '' }}">
        </div>

        <div style="margin: 20px">
            <fieldset>
                <p style="font-weight: bold;">Opciones a elegir</p>

                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Opción 1" {{ $formulario->Opcion == 'Opción 1' ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Opción 1
                    </label>
                </div>

                <div class="form-check" style="display: inline-block;">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Opción 2" {{ $formulario->Opcion == 'Opción 2' ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Opción 2
                    </label>
                </div>
            </fieldset>
        </div>

        <div style="margin: 20px">
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('registroRespuestasFormularios') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
@endsection