<?php

namespace App\Http\Exports;
use App\Models\SCParticipante;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\BeforeSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\RegistersEventListeners;

class ListasAsistenciaSC implements FromCollection, WithHeadings, WithEvents
{
    use RegistersEventListeners;

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $list = SCParticipante::select('place' , 'name_place', 'level_place','name_docente','mount_girls' ,'mount_boys', 'range_years','created_at')->orderby('name_place')->get();
        return $list;
    }

    public function headings(): array
    {
        // Encabezados que coinciden directamente con los campos seleccionados en la consulta
        return [
            'Lugar',
            'Nombre del instituo',
            'Nivel de estudio',
            'Nombre del docente',
            'Cantidad de niñas',
            'Cantidad de niños',
            'Rango de edad',
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
            },
        ];
    }
}
