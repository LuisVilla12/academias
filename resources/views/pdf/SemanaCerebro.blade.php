<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Asistentes</title>
    <!-- Agrega tus estilos CSS personalizados aquí si es necesario -->
</head>
<style>
    .contenedor {
        text-align: center;
        /* centrar horizontalmente */

    }

    .contenedor img {
        max-height: 80px;
        /* ajusta la altura máxima según tus necesidades */
    }

    table {
        border: 1px solid #4299e1;
    }
</style>

<body>

    <div class="flex justify-between">
        {{-- <img src="{{ asset('img/icons/Personas.png') }}" class="w-16 h-8"  alt="Descripción de la imagen"> --}}
        <h1 style="text-align: center; font-weight: bold; font-size: 2rem; margin-top: 2rem">Semana del cerebro</h1>
      </div>
    <div style="max-width: 100%; margin: auto; padding: 2rem;">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background-color: #4299e1; color: #fff">
                    <th style="padding: 0.5rem;">N°</th>
                    <th style="padding: 0.5rem;">Instituto</th>
                    <th style="padding: 0.5rem;">Nivel academico</th>
                    <th style="padding: 0.5rem;">Lugar</th>
                    <th style="padding: 0.5rem;">Nombre del docente</th>
                    <th style="padding: 0.5rem;">Cantidad de alumnos</th>
                    <th style="padding: 0.5rem;">Rango de edad</th>
                </tr>
            </thead>
            <tbody>
                <?php $contador = 1; ?>
                @foreach ($participantes as $participante)
                    <tr style="border: 1px solid #4299e1;">
                        <td style="text-align: center; padding: 0.5rem;">{{ $contador++ }}</td>
                        <td style="text-align: justify; padding: 0.5rem;">{{ $participante->name_place }}</td>
                        <td style="text-align: justify; padding: 0.5rem;">{{ $participante->level_place }}</td>
                        <td style="text-align: justify; padding: 0.5rem;">{{ $participante->place }}</td>
                        <td style="text-align: justify; padding: 0.5rem;">{{ $participante->name_docente }}</td>
                        <td style="text-align: center; padding: 0.5rem;">
                            {{ $participante->mount_girls + $participante->mount_boys }}</td>
                        <td style="text-align: justify; padding: 0.5rem;">{{ $participante->range_years }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
