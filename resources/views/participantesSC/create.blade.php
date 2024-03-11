@extends('layout.app')
@section('title')
    Registrar Participante
@endsection
@section('contenido')
    <h3 class="bg-titulo px-12 py-6 mt-5 font-bold uppercase text-3xl mx-auto inline-block">Registrar participante </h3>
    <form action="{{ route('participanteSC.create') }}" method="POST" autocomplete="off" class="">
        @csrf
        <div class="grid md:grid-cols-2 container px-10 py-3 mx-auto gap-24">
            {{-- Datos generales --}}
            <fieldset class="border">
                <legend class="text-xl m-5">Datos académicos</legend>
                <div class="p-5">

                    <div class="mb-5 gap-5">
                        <label class="font-bold text-primario uppercase mb-5" for="place">Lugar de procedencia:</label>
                        <input
                            class="flex-1 px-4 py-2 block w-full shadow-md rounded-xl @error('place') border-solid border-2 border-red-500 @enderror"
                            type="text" id="place" name="place" placeholder="Ingrese el lugar de procedencia"
                            value="{{ old('place') }}">
                    </div>
                    <div class="mb-5 gap-5">
                        <label class="font-bold text-primario uppercase mb-5" for="name_place">Nombre de la institución:</label>
                        <input
                            class="flex-1 px-4 py-2 block w-full shadow-md rounded-xl @error('name_place') border-solid border-2 border-red-500 @enderror"
                            type="text" id="name_place" name="name_place" placeholder="Ingrese el nombre de la institución"
                            value="{{ old('name_place') }}">
                    </div>
                    <div class="flex justify-between items-center mb-5 gap-5">
                        <label class="font-bold text-primario uppercase block" for="level_place">Nivel de estudio:</label>
                        <select name="level_place" id="level_place"
                            class="flex-1 focus:border-indigo-500 focus:ring-indigo-500 py-3 rounded-md shadow-sm block w-full horario @error('level_place') border-solid border-2 border-red-500  @enderror">
                            <option value="" disabled selected>--Sin seleccionar--</option>
                            <option value="Preescolar">Preescolar</option>
                            <option value="Primaria">Primaria</option>
                            <option value="Secundaria">Secundaria</option>
                            <option value="Bachillerato">Bachillerato</option>
                            <option value="Universidad">Universidad</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                </div>
            </fieldset>

            {{-- Datos academicos --}}
            <fieldset class="border">
                <legend class=" text-xl m-5"> Datos del tutor</legend>
                <div class="p-5">
                    <div class="">
                        <label class="font-bold text-primario uppercase block mb-5 " for="name_docente">Nombre del docente:</label>
                        <input
                            class="flex-1 px-4 py-2 block w-full shadow-md rounded-xl  @error('name_docente') border-solid border-2 border-red-500 @enderror"
                            type="text" id="name_docente" name="name_docente"
                            placeholder="Ingrese el nombre del docente" value="{{ old('name_docente') }}">
                    </div>
                </div>
                <div class="flex justify-between items-center m-5 gap-5">
                    <div class="flex justify-between items-center gap-5">
                        <label class="font-bold text-primario uppercase block" for="mount_girls">Cant. niñas:</label>
                        <input
                                class="flex-1 px-4 py-2 block w-full shadow-md rounded-xl @error('mount_girls') border-solid border-2 border-red-500 @enderror"
                                type="numbermmmj" id="mount_girls" name="mount_girls" placeholder=""
                                value="{{ old('mount_girls') }}">
                    </div>
                    <div class="flex justify-between items-center gap-5">
                        <label class="font-bold text-primario uppercase block" for="mount_boys">Cant. niños:</label>
                        <input
                                class="flex-1 px-4 py-2 block w-full shadow-md rounded-xl @error('mount_boys') border-solid border-2 border-red-500 @enderror"
                                type="number" id="mount_boys" name="mount_boys" placeholder=""
                                value="{{ old('mount_boys') }}">
                    </div>
                </div>
                <div class="flex justify-between items-center m-5 gap-5">
                    <label class="font-bold text-primario uppercase block" for="range_years">Rango de edades:</label>
                    <select name="range_years" id="range_years"
                        class="flex-1 focus:border-indigo-500 focus:ring-indigo-500 py-3 rounded-md shadow-sm block w-full horario @error('range_years') border-solid border-2 border-red-500  @enderror">
                        <option value="" disabled selected>--Sin seleccionar--</option>
                        <option value="3 años-5 años">3 años-5 años</option>
                        <option value="5 años-12 años">5 años-12 años</option>
                        <option value="12 años-15 años">12 años-15 años</option>
                        <option value="15 años-18 años">15 años-18 años</option>
                        <option value="Mayor a 18 años">Mayor a 18 años</option>
                    </select>
                </div>
            </fieldset>
           
        </div>
        <div></div>
        <div class="flex items-center justify-center w-10/12 mx-auto">
            <a href="{{ route('participanteSC.index') }}" class="font-bold bg-blue-500 border-none text-white py-4 px-8 mx-auto block shadow-sm rounded-md text-2xl hover:cursor-pointer">Volver</a>

            <input type="submit" value="Registrar" class="font-bold bg-secundario border-none text-white py-4 px-8 mx-auto inline-block shadow-sm rounded-md text-2xl hover:cursor-pointer"> 
        </div>
    </form>
@endsection
