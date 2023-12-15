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
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required value="Masculino" {{ $formulario->Genero == 'Masculino' ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Masculino
                    </label>
                </div>

                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" required value="Femenino" {{ $formulario->Genero == 'Femenino' ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Femenino
                    </label>
                </div>

                <div class="form-check" style="display: inline-block;">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" required value="Prefiero no decirlo" {{ $formulario->Genero == 'Prefiero no decirlo' ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Prefiero no decirlo
                    </label>
                </div>
            </fieldset>
        </div>

        <div class="mb-3" style="margin: 20px">
            <label for="exampleFormControlInput4" class="form-label" style="font-weight: bold;">¿Cómo se sintió durante su práctica profesional? Marque la respuesta que más le represente. * </label>
            <select class="form-select" aria-label="Default select example" name="satisfaccion" required>
                <option value="" disabled selected>Seleccione una opción</option>
                <option value="Muy bien" {{ $formulario->Satisfaccion == 'Muy bien' ? 'selected' : '' }}>Muy bien</option>
                <option value="Bien" {{ $formulario->Satisfaccion == 'Bien' ? 'selected' : '' }}>Bien</option>
                <option value="Neutral" {{ $formulario->Satisfaccion == 'Neutral' ? 'selected' : '' }}>Neutral</option>
                <option value="Mal" {{ $formulario->Satisfaccion == 'Mal' ? 'selected' : '' }}>Mal</option>
                <option value="Muy mal" {{ $formulario->Satisfaccion == 'Muy mal' ? 'selected' : '' }}>Muy mal</option>
            </select>
        </div>

        <div class="mb-3" style="margin: 20px">
            <label for="exampleFormControlInput3" class="form-label" style="font-weight: bold;">A continuación puede dejar sus comentarios sobre esta experiencia</label>
            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Texto" name="comentarios" value="{{ $formulario->Comentarios }}">
        </div>

        <div style="margin: 20px">
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('registroRespuestasFormularios') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
@endsection