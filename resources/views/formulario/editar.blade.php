@extends('app')

@section('image')
@endsection

@section('content')
    <h2 style="font-weight: bold; text-align: center; margin: 20px">Editar Respuestas</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('forms.update', $formulario->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div style="margin: 20px">
            <label for="email" class="form-label" style="font-weight: bold;">Correo Electrónico *</label>
            <input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com" name="email" value="{{ $formulario->Email }}" required>
        </div>

        <div style="margin: 20px">
            <label for="nombre" class="form-label" style="font-weight: bold;">Nombre completo *</label>
            <input type="text" class="form-control" id="nombre" placeholder="Nombre Apellido" name="nombre" value="{{ $formulario->Nombre }}" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]+$" title="Sólo se pueden ingresar letras en este campo." required>
        </div>

        <div style="margin: 20px">
            <fieldset>
                <p style="font-weight: bold;">Género *</p>

                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                    <input class="form-check-input" type="radio" name="genero" id="masculino" required value="Masculino" {{ $formulario->Genero == 'Masculino' ? 'checked' : '' }}>
                    <label class="form-check-label" for="masculino">
                        Masculino
                    </label>
                </div>

                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                    <input class="form-check-input" type="radio" name="genero" id="femenino" required value="Femenino" {{ $formulario->Genero == 'Femenino' ? 'checked' : '' }}>
                    <label class="form-check-label" for="femenino">
                        Femenino
                    </label>
                </div>

                <div class="form-check" style="display: inline-block;">
                    <input class="form-check-input" type="radio" name="genero" id="otro" required value="Prefiero no decirlo" {{ $formulario->Genero == 'Prefiero no decirlo' ? 'checked' : '' }}>
                    <label class="form-check-label" for="otro">
                        Prefiero no decirlo
                    </label>
                </div>
            </fieldset>
        </div>

        <div class="mb-3" style="margin: 20px">
            <label for="satisfaccion" class="form-label" style="font-weight: bold;">¿Cómo se sintió durante su práctica profesional? Marque la respuesta que más le represente. * </label>
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
            <label for="comentarios" class="form-label" style="font-weight: bold;">A continuación puede dejar sus comentarios sobre esta experiencia</label>
            <input type="text" class="form-control" id="comentarios" placeholder="Texto" name="comentarios" value="{{ $formulario->Comentarios }}">
        </div>

        <div style="margin: 20px">
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('forms.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
@endsection