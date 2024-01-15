@extends('layout.app')
@section('title')
    Crear participante
@endsection
@section('contenido')
    <h3 class="bg-titulo px-12 py-6 mt-5 font-bold uppercase text-3xl mx-auto inline-block">Registrar participante </h3>
    <form action="{{ route('participante.create') }}" method="POST" autocomplete="off" class="">
        @csrf
        <div class="grid md:grid-cols-2 container px-10 py-3 mx-auto gap-24">
            {{-- Datos generales --}}
            <fieldset class="border">
                <legend class="text-xl m-5">Datos personales</legend>
                <div class="p-5">

                    <div class="mb-5 gap-5">
                        <label class="font-bold text-primario uppercase mb-5" for="name">Nombre completo:</label>
                        <input
                            class="flex-1 px-4 py-2 block w-full shadow-md rounded-xl @error('name') border-solid border-2 border-red-500 @enderror"
                            type="text" id="name" name="name" placeholder="Ingrese su nombre"
                            value="{{ old('name') }}">
                    </div>
                    <div class="mb-5 gap-5">
                        <label class="font-bold text-primario uppercase block mb-5" for="lastname_m">Miembros del cuerpo academico:</label>
                        <textarea id="lastname_m" class="block mt-1 w-full border-solid border-2" type="text" name="lastname_m"> {{old('lastname_m')}}</textarea>
                    </div>
                    
                    <div class="flex justify-between items-center mb-5 gap-5">
                        <label class="font-bold text-primario uppercase block" for="email_personal">Correo personal
                            :</label>
                        <input
                            class="flex-1 px-4 py-2 block w-full shadow-md rounded-xl @error('email_personal') border-solid border-2  border-red-500 @enderror"
                                type="email" id="email_personal" name="email_personal"
                            placeholder="Ingrese su correo personal" value="{{ old('email_personal') }}">
                    </div>
                    <div class="flex justify-between items-center mb-5 gap-5">
                        <label class="font-bold text-primario uppercase block" for="number">Número telefonico :</label>
                        <input
                            class="flex-1 px-4 py-2 block w-full shadow-md rounded-xl @error('number') border-solid border-2 border-red-500 @enderror"
                            type="number" id="number" name="number" placeholder="Ingrese su número telefonico"
                            value="{{ old('number') }}">
                    </div>
                </div>
            </fieldset>

            {{-- Datos academicos --}}
            <fieldset class="border">
                <legend class=" text-xl m-5"> Datos academicos</legend>
                <div class="p-5">
                    <div class="flex justify-between items-center mb-5 gap-5">
                        <label class="font-bold text-primario uppercase block" for="email_institucional">Correo
                            institucional:</label>
                        <input
                            class="flex-1 px-4 py-2 block w-full shadow-md rounded-xl @error('email_institucional') border-solid border-2 border-red-500 @enderror"
                            type="email" id="email_institucional" name="email_institucional"
                            placeholder="Ingrese su correo institucional" value="{{ old('email_institucional') }}">
                    </div>
                    <div class="flex justify-between items-center mb-5 gap-5">
                        <label class="font-bold text-primario uppercase block" for="instituto">Institución de procedencia
                            :</label>
                        <select name="instituto" id="instituto"
                            class="flex-1 focus:border-indigo-500 focus:ring-indigo-500 py-3 rounded-md shadow-sm block w-full horario @error('instituto') border-solid border-2 border-red-500  @enderror">
                            <option value="" disabled selected>--Sin seleccionar--</option>
                            <option value="ITS Xalapa">ITS Xalapa</option>
                            <option value="ITS Misantla">ITS Misantla</option>
                            <option value="ITS Perote">ITS Perote</option>
                            <option value="ITS Libres">ITS Libres</option>
                            <option value="ITS Álvarado">ITS Álvarado</option>
                            <option value="ITS Álamo">ITS Álamo</option>
                            <option value="ITS Poza Rica ">ITS Poza Rica </option>
                            <option value="IT de Boca del Río">IT de Boca del Río</option>
                            <option value="IT Úrsulo Galván">IT Úrsulo Galván</option>
                            <option value="UV">UV</option>
                            <option value="QFB">QFB</option>
                            <option value="IICE">IICE</option>
                            <option value="ICB">ICB</option>
                            <option value="INECOL">INECOL</option>
                            <option value="ITS Hidalgo">ITS Higaldo</option>
                            <option value="UAEH">UAEH Universidad Autónoma del Estado de Hidalgo</option>
                            <option value="Dirección de educación tecnologica">Dirección de educación tecnologica</option>
                            <option value="Otros">Otros</option>
                        </select>
                       
                    </div>
                    <div class="mb-5">
                        <label class="font-bold text-primario uppercase block mb-5 " for="name_academico">Clave y Nombre del Cuerpo
                            Académico:</label>
                        <input
                            class="flex-1 px-4 py-2 block w-full shadow-md rounded-xl  @error('name_academico') border-solid border-2 border-red-500 @enderror"
                            type="text" id="name_academico" name="name_academico"
                            placeholder="Ingrese el nombre del cuerpo académico" value="{{ old('name_academico') }}">
                        
                    </div>
                    <div class="flex justify-between items-center mb-5 gap-5">
                        <label class="font-bold text-primario uppercase block" for="grade_academico">Grado del Cuerpo
                            Académico:</label>
                        <select name="grade_academico" id="grade_academico"
                            class="@error('grade_academico') border-solid border-2 border-red-500  @enderror flex-1 py-3 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-full horario">
                            <option value="" disabled selected>--Sin seleccionar--</option>
                            <option value="CAEF">CAEF</option>
                            <option value="CAEC">CAEC</option>
                            <option value="CAC">CAC</option>
                        </select>
                        
                    </div>
                    <div class="flex justify-between items-center mb-5 gap-5">
                        <label class="font-bold text-primario uppercase block" for="area">Area Temática:</label>
                        <select name="area" id="area"
                            class="@error('area') border-solid border-2 border-red-500  @enderror flex-1 py-3 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-full horario">
                            <option value="" disabled selected>--Sin seleccionar--</option>
                            <option value="Sistemas de Géstión">Sistemas de Géstión </option>
                            <option value="Gestión ambiental">Gestión ambiental</option>
                            <option value="Salud y sustentabilidad">Salud y sustentabilidad</option>
                            <option value="Tecnología sustentable">Tecnología sustentable</option>
                        </select>
                        
                    </div>
    
                </div>
            </fieldset>
           
        </div>
        <div></div>
        <div class="flex items-center justify-center w-10/12 mx-auto">
            <a href="{{ route('participantes.index') }}" class="font-bold bg-blue-500 border-none text-white py-4 px-8 mx-auto block shadow-sm rounded-md text-2xl hover:cursor-pointer">Volver</a>

            <input type="submit" value="Registrar" class="font-bold bg-secundario border-none text-white py-4 px-8 mx-auto inline-block shadow-sm rounded-md text-2xl hover:cursor-pointer"> 
        </div>
    </form>
@endsection
