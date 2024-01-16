<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\FormulariosExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function exportToExcel() 
    {
        return Excel::download(new FormulariosExport, 'registroRespuestas.xlsx');
    }
}