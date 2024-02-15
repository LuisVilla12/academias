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
      text-align: center; /* centrar horizontalmente */
      
    }
    .contenedor img {
      max-height: 80px; /* ajusta la altura máxima según tus necesidades */
    }
  </style>
<body>
    <div class="contenedor">
        <img src="{{ asset('img/LOGOOOOO.png') }}" alt="Descripción de la imagen">
      </div>
<h1 style="text-align: center; font-weight: bold; font-size: 2rem; margin-top: 2rem">1er Encuentro de Cuerpo Académicos: "Acercando la Tecnología a la sustentabilidad"</h1>
<div>
  <p >Total de cuerpos academicos que asistieron: {{28}}</p>
  <p >Total de institutos tecnológicos que asistieron: {{16}}</p>
  <p >Total de universidades que asistieron: {{9}}</p>
  <p >Total de invitados: {{3}} (2 INECOL y 1 COLPOS)</p>
</div>
<div style="max-width: 100%; margin: auto; padding: 2rem;">
    <table style="width: 100%; border-collapse: collapse; border: 1px solid #2b6cb0;">
        <thead>
        <tr style="background-color: #4299e1; color: #fff; border: 1px solid #2b6cb0;">
            <th style="padding: 0.5rem; border: 1px solid #2b6cb0;">N°</th>
            <th style="padding: 0.5rem; border: 1px solid #2b6cb0;">Instituto</th>
            <th style="padding: 0.5rem; border: 1px solid #2b6cb0;">CLAVE y Nombre de CA</th>
            <th style="padding: 0.5rem; border: 1px solid #2b6cb0;">Miembros del cuerpo academico</th> 
            {{-- <th style="width: 150px; padding: 0.5rem; border: 1px solid #2b6cb0;">Firma </th> --}}
        </tr>
        </thead>
        <tbody>
        <?php $contador = 1; ?>
        @foreach ($participiants as $participiant)
        <tr style="border: 1px solid #2b6cb0;">
            <td style="text-align: center; padding: 0.5rem; border: 1px solid #2b6cb0;">{{ $contador++ }}</td>
            <td style="text-align: center; padding: 0.5rem; border: 1px solid #2b6cb0;">{{ $participiant->instituto }}</td>
            <td style="text-align: justify; padding: 0.5rem; border: 1px solid #2b6cb0;">{{ $participiant->name_academico }}</td>
            <td style="text-align: justify; padding: 0.5rem; border: 1px solid #2b6cb0;">{{ $participiant->lastname_m }}</td>
            {{-- <td style="text-align: center; padding: 0.5rem; border: 1px solid #2b6cb0;"> {{ $participiant->lastname_p. "           " }}  </td> --}}
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        </tfoot>
    </table>
 
</div>
</body>
</html>

