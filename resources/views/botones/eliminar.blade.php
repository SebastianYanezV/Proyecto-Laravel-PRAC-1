<form action="{{ $formAction }}" method="POST" onsubmit="return confirm('¿Está seguro de que quiere eliminar este registro? Esta acción es permanente.');">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Eliminar</button>
</form>
