<?php

namespace App\Exports;

use App\Models\Formulario;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

class FormulariosExport implements FromCollection
{
    public function collection()
    {
        return collect(DB::table('formularios')->get());
        //return Formulario::all();
    }
}