<?php

namespace App\Http\Controllers\PDF;

use App\Models\Participante;
use Illuminate\Http\Request;
use App\Models\RegisterEvent;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf as PDFFacade;


class ListAssistantsController extends Controller
{
    //
    public function previewListAssistants(): Response
    {
        $participiants =DB::table('participantes')->orderBy('instituto')->get();

        $pdf_file = PDFFacade::loadView(
            'pdf.listAssistants.template',
            compact(
                'participiants',
            )
        // )->setPaper('letter', 'landscape');
        )->setPaper('letter');

        // preview
        return $pdf_file->stream("List_assistants.pdf");
    }

    public function sendInvitation(Request $request): JsonResponse
    {
        $participiants = Participante::all();

        $pdf_file = PDFFacade::loadView(
            'pdf.listAssistants.template',
            compact(
                'participiants',
            )
        )->setPaper('letter','landscape');

        $path = Storage::path("pdf");
        $file_name = time() . ".pdf";
        $local_path = $path . DIRECTORY_SEPARATOR . $file_name;
        info($local_path);
        $pdf_file->save($local_path);

        // TODO: enviar el correo o pasar este codigo de pdf al controller

        return response()->json([
            "message" => "invitacion enviada."
        ]);
    }
}