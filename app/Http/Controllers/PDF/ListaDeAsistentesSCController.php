<?php

namespace App\Http\Controllers\PDF;

use Illuminate\Http\Response;
use App\Models\SCParticipante;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf as PDFFacade;


class ListaDeAsistentesSCController extends Controller
{
    //
    public function exportarPDFAsistentesSC(): Response{
        $participantes=SCParticipante::all();
        $pdf_file = PDFFacade::loadView(
            'pdf.SemanaCerebro',
            compact(
                'participantes',
            )
        )->setPaper('letter', 'landscape');
        // )->setPaper('letter');
        return $pdf_file->stream("List_assistants.pdf");
    }
}