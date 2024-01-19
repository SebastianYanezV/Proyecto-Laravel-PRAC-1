@extends('app')

@section('image')
@endsection

@section('content')
    <h2 style="font-weight: bold; text-align: center; margin: 20px">Registro de respuestas de formularios</h2>
        <div class="container">
            <div class="card">
                <div class="card-header">Registro de Respuestas</div>
                <div class="card-body">
                    {{ $dataTable->table() }}
                </div>
            </div>
        </div>

    <div style="text-align: center; margin: 20px; padding: 40px">
        <a href="{{ route('exportToExcel') }}" class="btn btn-success">Exportar registro a Excel</a>
    </div>
@endsection
 
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
