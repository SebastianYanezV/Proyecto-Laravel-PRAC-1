<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Practica</title>

    <link rel="shortcut icon" href="{{ asset('favicon-16x16.png') }}">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <style>
    body {
        background-color: #e1f5f3;
    }
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid" >
        <a class="navbar-brand" href="/">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('forms.create') }}">Formulario</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('forms.index') }}">Registro de respuestas de formularios</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="image" style="text-align: center; position: relative">
      @section('image')
          <img src="{{ asset('Casa Central.jpg') }}" alt="Casa Central" style="width: 1366px; height: 577px; opacity: 0.5; position: absolute; top: 0; left: 0;">
          <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, 0%); text-align: center; color: black">
              <p style="font-size: 60px; font-family: 'Roboto Slab', serif; margin-bottom: 60px;">¡Bienvenido/a!</p>
              <div class="mb-3" style="text-align: center;">
                  <a href="{{ route('forms.create') }}" class="btn btn-primary btn-lg">¡Empezar a responder el formulario!</a>
              </div>
          </div>
      @show
    </div>
    @yield('content')
    @stack('scripts')
</body>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

<script>
  let table = new DataTable('#myTable');
</script>

</html>