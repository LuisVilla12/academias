<?php

namespace App\Http\Controllers\Export;

use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Exports\ListExportExcel;
use App\Http\Exports\ListasAsistenciaSC;

class ListAssistantsExcelController extends Controller
{
    /**
     * Muestra la lista de usuarios registrados.
     *
     * @return Response
     */
    public function ListExportExcel()
    {
        return Excel::download(new ListExportExcel, 'Lista.xlsx');
    }
    public function exportarExcelAsistentesSC()
    {

        return Excel::download(new ListasAsistenciaSC, 'Lista.xlsx');

    }
}
