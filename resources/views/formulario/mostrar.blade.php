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
@endsection
 
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush