@extends('app')

@section('content')
    <form action = "/forms" method = "POST"  >
        @csrf

        <div class="mb-3" style="margin: 20px; text-align: center; border: 1px groove; padding: 10px; background-color: #e9f0f2;">
            <h2 style="font-weight: bold;">Título del formulario</h2>
            <p>Este es un formulario de prueba para la práctica.</p>
            <p>* significa campo obligatorio.</p>
            <p>Pulse <a href="https://www.pucv.cl/">aquí</a> para más información.</p>
        </div>

        <div class="mb-3" style="margin: 20px">
            <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Correo Electrónico *</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com" name="email" value="" required>
        </div>

        <div class="mb-3" style="margin: 20px">
            <label for="exampleFormControlInput2" class="form-label" style="font-weight: bold;">Nombre completo *</label>
            <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Nombre Apellido" name="nombre" value="" required>
        </div>

        <div class="mb-3" style="margin: 20px">
            <label for="exampleFormControlInput3" class="form-label" style="font-weight: bold;">Descripción</label>
            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Texto" name="descripcion" value="">
        </div>

        <div style="margin: 20px">
            <fieldset>
                <p style="font-weight: bold">Opciones a elegir</p>

                <div class="form-check" style="display: inline-block; margin-right: 20px;">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Opcion 1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Opción 1
                    </label>
                </div>

                <div class="form-check" style="display: inline-block;">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Opcion 2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Opción 2
                    </label>
                </div>
            </fieldset>
        </div>

        <div class="mb-3" style="margin: 20px">
            <label for="tomarHoraActual" class="form-label"></label>
            <input type="hidden" id="horaActual" name="horaActual" value="{{ now()}}">

            <button type="submit" class="btn btn-primary">Enviar formulario</button>
        </div>
    </form>
@endsection