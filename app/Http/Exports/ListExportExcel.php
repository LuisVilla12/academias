<?php

namespace App\Http\Exports;
use App\Models\Participante;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\BeforeSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\RegistersEventListeners;

class ListExportExcel implements FromCollection, WithHeadings, WithEvents
{
    use RegistersEventListeners;

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // $list = Participante::select('instituto')->get();
        $list = Participante::select('instituto' , 'name_academico', 'grade_academico','area','lastname_m' ,'email_institucional', 'email_personal','number','created_at')->orderby('instituto')->get();

        return $list;
    }

    public function headings(): array
    {
        // Encabezados que coinciden directamente con los campos seleccionados en la consulta
        return [
            'Instituto',
            'Nombre y clave del cuerpo academico',
            'Grado academico',
            'Area',
            'Miembros del cuerpo academico',
            'Correo institucional',
            'Correo particular',
            'Número de telefono',
            'Fecha de registro',
        ];
    }   

    /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            BeforeSheet::class => function(BeforeSheet $event) {
                // Ajustar automáticamente el ancho de las columnas basándose en la longitud de los datos
                $event->sheet->getDelegate()->getColumnDimension('A')->setAutoSize(true);
                 $event->sheet->getDelegate()->getColumnDimension('B')->setAutoSize(true);
                 $event->sheet->getDelegate()->getColumnDimension('C')->setAutoSize(true);
                 $event->sheet->getDelegate()->getColumnDimension('D')->setAutoSize(true);
                 $event->sheet->getDelegate()->getColumnDimension('E')->setAutoSize(true);
                 $event->sheet->getDelegate()->getColumnDimension('F')->setAutoSize(true);
                 $event->sheet->getDelegate()->getColumnDimension('G')->setAutoSize(true);
                 $event->sheet->getDelegate()->getColumnDimension('H')->setAutoSize(true);
                 $event->sheet->getDelegate()->getColumnDimension('I')->setAutoSize(true);
            },
        ];
    }
}
