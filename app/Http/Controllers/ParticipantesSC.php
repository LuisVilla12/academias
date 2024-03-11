<?php

namespace App\Http\Controllers;

use App\Models\Participante;
use App\Models\SCParticipante;
use Illuminate\Http\Request;

class ParticipantesSC extends Controller
{
    //
    public function index(){
        $participantes=SCParticipante::all();
        return view('participantesSC.index',['participantes'=>$participantes]);
    } 
    public function create(){
        return view('participantesSC.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'place'=>' required | min:3',
            'name_place'=>' required | min:3',
            'level_place'=>' required',
            'name_docente'=>' required | min:3',
            'mount_girls'=>' required',
            'mount_boys'=>' required',
            'range_years'=>' required'
        ]);
        SCParticipante::create([
            'place'=>$request->place,
            'name_place'=>$request->name_place,
            'level_place'=>$request->level_place,
            'name_docente'=>$request->name_docente,
            'mount_girls'=>$request->mount_girls,
            'mount_boys'=>$request->mount_boys,
            'range_years'=>$request->range_years
         ]);
        return redirect()->route('participanteSC.index');
    }
    public function edit(SCParticipante $scparticipante){
        return view('participantesSC.edit',['participante'=>$scparticipante]);
    }

    public function update(SCParticipante $scparticipante,Request $request){
        $this->validate($request,[
            'place'=>' required | min:3',
            'name_place'=>' required | min:3',
            'level_place'=>' required',
            'name_docente'=>' required | min:3',
            'mount_girls'=>' required',
            'mount_boys'=>' required',
            'range_years'=>' required'
        ]);
       
        $scparticipante->update([
            'place'=>$request->place,
            'name_place'=>$request->name_place,
            'level_place'=>$request->level_place,
            'name_docente'=>$request->name_docente,
            'mount_girls'=>$request->mount_girls,
            'mount_boys'=>$request->mount_boys,
            'range_years'=>$request->range_years
         ]);
        $participantes=SCParticipante::all();
        return view('participantesSC.index',['participantes'=>$participantes]);
    }
}
