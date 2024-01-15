@extends('layout.app')
@section('title')
    Editar participante
@endsection
@section('contenido')
    <h3 class="bg-titulo px-12 py-6 mt-5 font-bold uppercase text-3xl mx-auto inline-block">Editar participante </h3>
    <form action="{{ route('participante.edit',$participante) }}" method="POST" autocomplete="off" class="">
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
                            value="{{ $participante->name }}">
                    </div>
                    <div class="mb-5 gap-5">
                        <label class="font-bold text-primario uppercase block mb-5" for="lastname_m">Miembros del cuerpo academico:</label>
                        <textarea id="lastname_m" class="block mt-1 w-full border-solid border-2" type="text" name="lastname_m"> {{$participante->lastname_m}}</textarea>
                    </div>
                    
                    <div class="flex justify-between items-center mb-5 gap-5">
                        <label class="font-bold text-primario uppercase block" for="email_personal">Correo personal
                            :</label>
                        <input
                            class="flex-1 px-4 py-2 block w-full shadow-md rounded-xl @error('email_personal') border-solid border-2  border-red-500 @enderror"
                                type="email" id="email_personal" name="email_personal"
                            placeholder="Ingrese su correo personal" value="{{ $participante->email_personal}}">
                    </div>
                    <div class="flex justify-between items-center mb-5 gap-5">
                        <label class="font-bold text-primario uppercase block" for="number">Número telefonico :</label>
                        <input
                            class="flex-1 px-4 py-2 block w-full shadow-md rounded-xl @error('number') border-solid border-2 border-red-500 @enderror"
                            type="number" id="number" name="number" placeholder="Ingrese su número telefonico"
                            value="{{ $participante->number }}">
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
                            placeholder="Ingrese su correo institucional" value="{{ $participante->email_institucional }}">
                    </div>
                    <div class="flex justify-between items-center mb-5 gap-5">
                        <label class="font-bold text-primario uppercase block" for="instituto">Institución de procedencia
                            :</label>
                        <select name="instituto" id="instituto"
                            class="flex-1 focus:border-indigo-500 focus:ring-indigo-500 py-3 rounded-md shadow-sm block w-full horario @error('instituto') border-solid border-2 border-red-500  @enderror">
                            <option value="">--Sin seleccionar--</option>
                            <option @php echo $participante->instituto =='ITS Xalapa' ? 'selected':''; @endphp value="ITS Xalapa" >ITS Xalapa</option>
                            <option @php echo $participante->instituto =='ITS Misantla' ? 'selected':''; @endphp value="ITS Misantla" >ITS Misantla</option>
                            <option @php echo $participante->instituto =='ITS Perote' ? 'selected':''; @endphp value="ITS Perote" >ITS Perote</option>
                            <option @php echo $participante->instituto =='ITS Libres' ? 'selected':''; @endphp value="ITS Libres">ITS Libres</option>
                            <option @php echo $participante->instituto =='ITS Álvarado' ? 'selected':''; @endphp value="ITS Álvarado">ITS Álvarado</option>
                            <option @php echo $participante->instituto =='ITS Álamo' ? 'selected':''; @endphp value="ITS Álamo">ITS Álamo</option>
                            <option @php echo $participante->instituto =='ITS Poza Rica' ? 'selected':''; @endphp value="ITS Poza Rica ">ITS Poza Rica </option>
                            <option @php echo $participante->instituto =='IT de Boca del Río' ? 'selected':''; @endphp value="IT de Boca del Río">IT de Boca del Río</option>
                            <option @php echo $participante->instituto =='IT Úrsulo Galván' ? 'selected':''; @endphp value="IT Úrsulo Galván">IT Úrsulo Galván</option>
                            <option @php echo $participante->instituto =='UV' ? 'selected':''; @endphp value="UV">UV</option>
                            <option @php echo $participante->instituto =='QFB' ? 'selected':''; @endphp value="QFB">QFB</option>
                            <option @php echo $participante->instituto =='IICE' ? 'selected':''; @endphp value="IICE">IICE</option>
                            <option @php echo $participante->instituto =='ICB' ? 'selected':''; @endphp value="ICB">ICB</option>
                            <option @php echo $participante->instituto =='INECOL' ? 'selected':''; @endphp value="INECOL">INECOL</option>
                            <option @php echo $participante->instituto =='ITS Higaldo' ? 'selected':''; @endphp value="ITS Higaldo">ITS Higaldo</option>
                            <option @php echo $participante->instituto =='UAEH' ? 'selected':''; @endphp value="UAEH">UAEH Universidad Autónoma del Estado de Hidalgo</option>
                            <option @php echo $participante->instituto =='Dirección de educación tecnologica' ? 'selected':''; @endphp value="Dirección de educación tecnologica">Dirección de educación tecnologica</option>
                            <option @php echo $participante->instituto =='Otros' ? 'selected':''; @endphp value="Otros">Otros</option>
                        </select>
                       
                    </div>
                    <div class="mb-5">
                        <label class="font-bold text-primario uppercase block mb-5 " for="name_academico">Clave y Nombre del Cuerpo
                            Académico:</label>
                        <input
                            class="flex-1 px-4 py-2 block w-full shadow-md rounded-xl  @error('name_academico') border-solid border-2 border-red-500 @enderror"
                            type="text" id="name_academico" name="name_academico"
                            placeholder="Ingrese el nombre del cuerpo académico" value="{{$participante->name_academico }}">
                        
                    </div>
                    <div class="flex justify-between items-center mb-5 gap-5">
                        <label class="font-bold text-primario uppercase block" for="grade_academico">Grado del Cuerpo
                            Académico:</label>
                        <select name="grade_academico" id="grade_academico"
                            class="@error('grade_academico') border-solid border-2 border-red-500  @enderror flex-1 py-3 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-full horario">
                            <option value="" disabled selected>--Sin seleccionar--</option>
                            <option value="CAEF" @php echo $participante->grade_academico =='CAEF' ? 'selected':''; @endphp>CAEF</option>
                            <option value="CAEC" @php echo $participante->grade_academico =='CAEC' ? 'selected':''; @endphp>CAEC</option>
                            <option value="CAC" @php echo $participante->grade_academico =='CAC' ? 'selected':''; @endphp>CAC</option>
                        </select>
                        
                    </div>
                    <div class="flex justify-between items-center mb-5 gap-5">
                        <label class="font-bold text-primario uppercase block" for="area">Area Temática:</label>
                        <select name="area" id="area"
                            class="@error('area') border-solid border-2 border-red-500  @enderror flex-1 py-3 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-full horario">
                            <option value="" >--Sin seleccionar--</option>
                            <option value="Sistemas de Géstión" @php echo $participante->area =='Sistemas de Géstión' ? 'selected':''; @endphp>Sistemas de Géstión </option>
                            <option value="Gestión ambiental" @php echo $participante->area =='Gestión ambiental' ? 'selected':''; @endphp >Gestión ambiental</option>
                            <option value="Salud y sustentabilidad" @php echo $participante->area =='Salud y sustentabilidad' ? 'selected':'';@endphp >Salud y sustentabilidad</option>
                            <option value="Tecnología sustentable" @php echo $participante->area =='Tecnología sustentable' ? 'selected':'';@endphp>Tecnología sustentable</option>
                        </select>
                        
                    </div>
    
                </div>
            </fieldset>
           
        </div>
        <div></div>
        <div class="flex items-center justify-center w-10/12 mx-auto">
            <a href="{{ route('participantes.index') }}" class="font-bold bg-blue-500 border-none text-white py-4 px-8 mx-auto block shadow-sm rounded-md text-2xl hover:cursor-pointer">Volver</a>

            <input type="submit" value="Actualizar" class="font-bold bg-secundario border-none text-white py-4 px-8 mx-auto inline-block shadow-sm rounded-md text-2xl hover:cursor-pointer"> 
        </div>
    </form>
@endsection
