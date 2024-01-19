<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class FormulariosExport implements FromCollection
{
    public function collection()
    {
        return collect(DB::table('formularios')->get());
        //return Formulario::all();
    }
}
