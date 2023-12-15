@extends('app')

@section('content')
    <h2 style="font-weight: bold; text-align: center; margin: 20px">Editar Respuestas</h2>

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
            <fieldset>
                <p style="font-weight: bold;">Género *</p>

                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Masculino" {{ $formulario->Opcion == 'Masculino' ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Masculino
                    </label>
                </div>

                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Femenino" {{ $formulario->Opcion == 'Femenino' ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Femenino
                    </label>
                </div>

                <div class="form-check" style="display: inline-block;">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Prefiero no decirlo" {{ $formulario->Opcion == 'Prefiero no decirlo' ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Prefiero no decirlo
                    </label>
                </div>
            </fieldset>
        </div>

        <div class="mb-3" style="margin: 20px">
            <label for="exampleFormControlInput3" class="form-label" style="font-weight: bold;">¿Cómo se sintió durante su práctica profesional? *</label>
            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Texto" name="descripcion" value="{{ $formulario->Descripcion }}" required>
        </div>

        <div style="margin: 20px">
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('registroRespuestasFormularios') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
@endsection