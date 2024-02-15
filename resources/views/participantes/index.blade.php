@extends('layout.app')
@section('title')
    Participantes
@endsection
@section('contenido')
    <div class="mx-auto w-10/12">
        <div class="flex justify-end my-5">
            <a href="{{ route('participante.create') }}" class="font-bold bg-green-500 border-none text-white py-4 px-8 mx-auto block shadow-sm rounded-md text-2xl hover:cursor-pointer">Registar</a>
            <a href="{{ route('list.assistants.preview.pdf') }}" class="font-bold bg-blue-500 border-none text-white py-4 px-8 mx-auto block shadow-sm rounded-md text-2xl hover:cursor-pointer " target="_blank">Ver lista</a>
            <a href="{{ route('excel') }}" class="font-bold bg-blue-500 border-none text-white py-4 px-8 mx-auto block shadow-sm rounded-md text-2xl hover:cursor-pointer " target="_blank">Generar excel</a>
        </div>
        <div class="mt-5 sm:mt-0">   
            <table class="w-full">
                <thead class="bg-primario ">
                    <tr>
                        <th class="uppercase text-white p-2">ID</th>
                        <th class="uppercase text-white p-2">Nombre completo</th>
                        <th class="uppercase text-white p-2">Instituto</th>
                        <th class="uppercase text-white p-2">Nombre academico</th>
                        <th class="uppercase text-white p-2">Grado academico</th>
                        <th class="uppercase text-white p-2">Acciones</th>
                    </tr>
            </thead>
            <tbody>
                @php $contador=1;@endphp
                @foreach ($participantes as $participante )
                <tr>
                    <td class="text-center">{{$contador++}}</td>
                    <td class="text-justify">{{$participante->name . " " . $participante->lastname_p }}</td>
                    <td class="text-center">{{$participante->instituto}}</td>
                    <td class="text-center">{{$participante->name_academico}}</td>
                    <td class="text-center">{{$participante->grade_academico}}</td>
                    <td>
                        <div class="sm:grid  sm:grid-cols-2  gap-5">
                                    
                                  <a href="{{ route('participante.edit',$participante)}}" class="text-xl text-white font-bold inline-block w-full mb-2 sm:mb-0 text-center bg-secundario p-2 rounded-md"><i class="fa-solid fa-pen fa-bounce sm:mr-2" style="color: #ffffff;"></i></a>
    
                                  <button wire:click="$emit('mostrarAlerta',{{$participante->id}})"
                                    class="text-white text-xl bg-red-500 font-bold flex w-full p-2 rounded-md  items-center justify-center">
                                    <i class="fa-solid fa-trash fa-bounce sm:mr-2" style="color: #ffffff;"></i>
                                    </button>
                        </div>
                    </td>
                </tr>   
                @endforeach
            </tbody>
          
        </table>
    
    
    </div>
    @push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('mostrarAlerta', evento_id => {
            Swal.fire({
                title: '¿Eliminar evento?',
                text: "Una publicación eliminada no se puede revertir",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Si, eliminar!'
            }).then((result) => {
                if (result.isConfirmed) {
                        // Eliminar Vacante
                        Livewire.emit('eliminarEvento',evento_id);
                        Swal.fire(
                            'Se ha Eliminado el evento',
                            'Eliminado correctamente',
                            'success'
                        )
                    }
            });
        });
    </script>
    @endpush
    

    </div>
@endsection

