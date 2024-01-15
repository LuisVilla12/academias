<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\RegisterEvent;
use Illuminate\Http\Request;

class InscripcionsController extends Controller
{
    public function create(Request $request, Evento $evento){
        //Log::info("Consulta de publicación realizada:", ['evento' => $evento]);
        return view('incripciones.create',['evento'=>$evento]);
    }
    public function store(Request $request, Evento $evento){
        $this->validate($request,[
            'nombreCA'=>['required','min:5','max:100'],
            'lider'=>['required','min:5','max:100'],
            'instituto'=>['required'],
            'grado'=>['required'],
            'companion'=>['max:100'],
            'colaborador_1'=>['max:100'],
            'colaborador_2'=>['max:100'],
            'colaborador_3'=>['max:100'],
            'colaborador_4'=>['max:100'],
            'colaborador_5'=>['max:100'],
            'colaborador_6'=>['max:100'],
            'solicitud_equipo'=>['max:200'],
            'tematica'=>['required','min:5','max:100']
        ]);

        // dd('creando registro evento');
        RegisterEvent::create([
            'users_id' => auth()->user()->id,
            'evento_id' => $evento->id,
            'nombreCA'=>$request->nombreCA,
            'lider'=>$request->lider,
            'instituto'=>$request->instituto,
            'grado'=>$request->grado,
            'companion'=>$request->companion,
            'colaborador_1'=>$request->colaborador_1,
            'colaborador_2'=>$request->colaborador_2,
            'colaborador_3'=>$request->colaborador_3,
            'colaborador_4'=>$request->colaborador_4,
            'colaborador_5'=>$request->colaborador_5,
            'colaborador_6'=>$request->colaborador_6,
            'solicitud_equipo'=>$request->solicitud_equipo,
            'tematica'=>$request->tematica
        ]);
        // dd($evento->id);
        //  regresar a la pagina anterior
//      return view('publications.profile',['publication'=>$publication->id]);
        return redirect()->route('pages.eventos');
    }

    public function destroy(RegisterEvent $register_event){
        $register_event->delete();
        $registers_event = RegisterEvent::all();
        return redirect()->route('admin.registerEvent', ['registers_event' => $registers_event]);
    }

    public function updateStatusValidateRegisterEvent(RegisterEvent $register_event){
        $register_event->update([
            'validacion'=>'1'
        ]);
        return back();
    }

    public function edit(RegisterEvent $registers_event){
        return view('register_event.edit',['registers_event'=>$registers_event]);
    }
    public function update(Request $request, RegisterEvent $registers_event, Evento $evento){
        $this->validate($request,[
            'nombreCA'=>['required','min:5','max:100'],
            'lider'=>['required','min:5','max:100'],
            'instituto'=>['required'],
            'grado'=>['required'],
            'companion'=>['max:100'],
            'colaborador_1'=>['max:100'],
            'colaborador_2'=>['max:100'],
            'colaborador_3'=>['max:100'],
            'colaborador_4'=>['max:100'],
            'colaborador_5'=>['max:100'],
            'colaborador_6'=>['max:100'],
            'solicitud_equipo'=>['max:200'],
            'tematica'=>['required','min:5','max:100']
        ]);
        $registers_event->update([
            'nombreCA'=>$request->nombreCA,
            'lider'=>$request->lider,
            'instituto'=>$request->instituto,
            'grado'=>$request->grado,
            'companion'=>$request->companion,
            'colaborador_1'=>$request->colaborador_1,
            'colaborador_2'=>$request->colaborador_2,
            'colaborador_3'=>$request->colaborador_3,
            'colaborador_4'=>$request->colaborador_4,
            'colaborador_5'=>$request->colaborador_5,
            'colaborador_6'=>$request->colaborador_6,
            'solicitud_equipo'=>$request->solicitud_equipo,
            'tematica'=>$request->tematica
        ]);
        $registers_event=RegisterEvent::all();
        return redirect()->route('admin.registerEvent',['registers_event'=>$registers_event]);
        //  return view('admin.publications',['publications'=>$publications]);
        // return back()->with('mensaje','Publications actualizada correctamente');

    }
}
