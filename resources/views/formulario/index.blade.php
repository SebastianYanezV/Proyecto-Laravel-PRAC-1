@extends('app')

@section('image')
@endsection

@section('content')
    <form action = "/forms" method = "POST"  >
        @csrf

        <div class="mb-3" style="margin: 20px; text-align: center; border: 1px groove; padding: 10px; background-color: #e9f0f2;">
            <h2 style="font-weight: bold;">Encuesta de satisfacción sobre práctica profesional</h2>

            <div class="mb-3" style="padding: 20px">
                <p>Este formulario tiene como objetivo recopilar información sobre la experiencia de los practicantes durante el período en que llevaron a cabo sus prácticas. Queremos conocer cómo se sintieron durante este tiempo.</p>
                <p>El símbolo * significa campo obligatorio.</p>
                <p>Pulse <a href="https://www.pucv.cl/">aquí</a> para más información.</p>
            </div>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session()->has("success"))
            <div class="alert alert-success">
                {{ session("success") }}
            </div>    
        @endif

        <div class="mb-3" style="margin: 20px">
            <label for="email" class="form-label" style="font-weight: bold;">Correo Electrónico *</label>
            <input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com" name="email" value="" required>
        </div>

        <div class="mb-3" style="margin: 20px">
            <label for="nombre" class="form-label" style="font-weight: bold;">Nombre completo *</label>
            <input type="text" class="form-control" id="nombre" placeholder="Nombre Apellido" name="nombre" value="" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]+$" title="Sólo se pueden ingresar letras en este campo." required>
        </div>

        <div style="margin: 20px">
            <fieldset>
                <p style="font-weight: bold">Género *</p>

                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                    <input class="form-check-input" type="radio" name="genero" id="masculino" value="Masculino" required>
                    <label class="form-check-label" for="masculino">
                        Masculino
                    </label>
                </div>

                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                    <input class="form-check-input" type="radio" name="genero" id="femenino" value="Femenino" required>
                    <label class="form-check-label" for="femenino">
                        Femenino
                    </label>
                </div>

                <div class="form-check" style="display: inline-block;">
                    <input class="form-check-input" type="radio" name="genero" id="otro" value="Prefiero no decirlo" required>
                    <label class="form-check-label" for="otro">
                        Prefiero no decirlo
                    </label>
                </div>
            </fieldset>
        </div>

        <div class="mb-3" style="margin: 20px">
            <label for="satisfaccion" class="form-label" style="font-weight: bold;">¿Cómo se sintió durante su práctica profesional? Marque la respuesta que más le represente. * </label>
            <select class="form-select" aria-label="Default select example" name="satisfaccion" required>
                <option value="" disabled selected>Presione para abrir el menú de respuestas</option>
                <option value="Muy bien">Muy bien</option>
                <option value="Bien">Bien</option>
                <option value="Neutral">Neutral</option>
                <option value="Mal">Mal</option>
                <option value="Muy mal">Muy mal</option>
            </select>
        </div>

        <div class="mb-3" style="margin: 20px">
            <label for="comentarios" class="form-label" style="font-weight: bold;">A continuación puede dejar sus comentarios sobre esta experiencia</label>
            <input type="text" class="form-control" id="comentarios" placeholder="Texto" name="comentarios" value="">
        </div>

        <div class="form-group mt-4 mb-4" style="margin: 20px">
            <div class="captcha">
                <span>{!! captcha_img('math') !!}</span>
                <button type="button" class="btn btn-danger" id="reload">
                    &#x21bb;
                </button>
            </div>
        </div>

        <div class="form-group mb-4" style="margin: 20px">
            <input id="captcha" type="text" class="form-control" placeholder="Ingrese el Captcha" name="captcha">
        </div>

        <div class="mb-3" style="margin: 20px">
            <label for="horaActual" class="form-label"></label>
            <input type="hidden" id="horaActual" name="horaActual" value="{{ now()}}">

            <button type="submit" class="btn btn-primary">Enviar formulario</button>
        </div>
    </form>
@endsection