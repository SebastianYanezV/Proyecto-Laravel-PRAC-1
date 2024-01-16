<?php

namespace App\DataTables;

use App\Models\Formulario;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class FormulariosDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->addColumn('edit', function($row) {
            return view('botones.editar', ['formAction' => route('forms.edit', $row->id)]);
        })
        ->addColumn('delete', function($row) {
            return view('botones.eliminar', ['formAction' => route('forms.destroy', $row->id)]);
        })
        //$url = 'http://127.0.0.1:8000/forms/' . $data->id . '/edit';
        //return $url;
        ->rawColumns(['action'])
        ->rawColumns(['action2'])
        //->make(true)
        ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Formulario $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('formularios-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(0, 'asc')
                    ->selectStyleSingle()
                    ->language([
                        'sProcessing' => 'Procesando...',
                        'sLengthMenu' => 'Mostrar _MENU_ registros',
                        'sZeroRecords' => 'No se encontraron resultados',
                        'sEmptyTable' => 'Ningún dato disponible en esta tabla',
                        'sInfo' => 'Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros',
                        'sInfoEmpty' => 'Mostrando registros del 0 al 0 de un total de 0 registros',
                        'sInfoFiltered' => '(filtrado de un total de _MAX_ registros)',
                        'sInfoPostFix' => '',
                        'sSearch' => 'Buscar:',
                        'sUrl' => '',
                        'sInfoThousands' => ',',
                        'sLoadingRecords' => 'Cargando...',
                        'oPaginate' => [
                            'sFirst' => 'Primero',
                            'sLast' => 'Último',
                            'sNext' => 'Siguiente',
                            'sPrevious' => 'Anterior',
                        ],
                        'oAria' => [
                            'sSortAscending' => ': Activar para ordenar la columna de manera ascendente',
                            'sSortDescending' => ': Activar para ordenar la columna de manera descendente',
                        ],
                    ])
                    ->lengthMenu([5, 10, 25, 50]) 
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id')->title('ID'),
            Column::make('Nombre')->title('Nombre'),
            Column::make('Email')->title('Email'),
            Column::make('Genero')->title('Género'),
            Column::make('Satisfaccion')->title('Satisfacción'),
            Column::make('Comentarios')->title('Comentarios')->sortable(false),
            Column::make('edit')->title('Editar')->sortable(false),
            Column::make('delete')->title('Eliminar')->sortable(false),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Formularios_' . date('YmdHis');
    }
}