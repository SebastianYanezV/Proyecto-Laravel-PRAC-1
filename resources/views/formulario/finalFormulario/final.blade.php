@extends('app')

@section('content')

<div class="mb-3" style="margin: 20px; text-align: center;">
    <h2 style="font-weight: bold;">Formulario creado con éxito</h2>
</div>

<div class="mb-3" style="margin: 20px; text-align: left; border: 1px solid; padding: 15px;">
    <p>Estimado/a Colaborador,</p>
    <p>Nos complace confirmar que hemos recibido con éxito su formulario para esta prueba de práctica. Agradecemos sinceramente su interés en participar en esta prueba.</p>
    <p>Su formulario está ahora en proceso de revisión por parte de nuestro equipo. Nos esforzamos por realizar una evaluación exhaustiva de todos los formularios, y le notificaremos la decisión tan pronto como sea posible.</p>
    <p>Le invitamos a visitar nuestro sitio web oficial <a href="https://dgaeapucv.cl/">https://dgaeapucv.cl/</a>, donde encontrará información detallada sobre la práctica y otros aspectos relevantes de la actividad.</p>
    <p>Si tiene alguna pregunta no dude en ponerse en contacto con nosotros a través del correo electrónico <a href="practica@profesional.com">practica@profesional.com</a>. Estamos aquí para ayudarle y asegurarnos de que su experiencia sea positiva y enriquecedora.</p>
    <p>Agradecemos nuevamente su participación.</p>
    <p>Saludos cordiales,</p>
    <p>Equipo Desarrollador<br>
    1ª Práctica Profesional<br>
    Coordinación General de la Vicerrectoría de Administración y Finanzas<br>
    Pontificia Universidad Católica de Valparaíso</p>
</div>

<div class="mb-3" style="margin: 20px; text-align: center; padding-top: 20px;">
    <a href="{{ route('formulario.show') }}" class="btn btn-secondary">Volver a pestaña de formulario</a>
    <a href="{{ route('registroRespuestasFormularios') }}" class="btn btn-secondary">Ver registro de respuestas de formularios</a>
</div>

@endsection