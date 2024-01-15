<?php

namespace App\Http\Controllers;

use App\Models\Participante;
use Illuminate\Http\Request;

class ParticipanteController extends Controller
{
    //
    public function index (){
        $participantes=Participante::all();
        return view('participantes.index',['participantes'=>$participantes]);
    }
    public function create(){
        return view('participantes.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>' required | min:3',
            'lastname_p'=>'',
            'lastname_m'=>'required ',
            'email_institucional'=>'required | min:5 | max:255',
            'email_personal'=>'required | min:5 | max:255',
            'number'=>'required | min:5 | max:255',
            'instituto'=>'required',
            'name_academico'=>'required | min:5 | max:255',
            'grade_academico'=>'required',
            'area'=>'required'
        ]);
        Participante::create([
            'name'=>$request->name,
            'lastname_p'=>"",
            'lastname_m'=>$request->lastname_m,
            'email_institucional'=>$request->email_institucional,
            'email_personal'=>$request->email_personal,
            'number'=>$request->number,
            'instituto'=>$request->instituto,
            'name_academico'=>$request->name_academico,
            'grade_academico'=>$request->grade_academico,
            'area'=>$request->area
         ]);
        return redirect()->route('participantes.index');
    }
       
    public function edit(Participante $participante){
        return view('participantes.edit',['participante'=>$participante]);
    }

    public function update(Participante $participante,Request $request){
        $this->validate($request,[
            'name'=>' required | min:3',
            'lastname_p'=>'',
            'lastname_m'=>'required ',
            'email_institucional'=>'required | min:5 | max:255',
            'email_personal'=>'required | min:5 | max:255',
            'number'=>'required | min:5 | max:255',
            'instituto'=>'required',
            'name_academico'=>'required | min:5 | max:255',
            'grade_academico'=>'required',
            'area'=>'required'
        ]);
        $participante->update([
            'name'=>$request->name,
            'lastname_p'=>"",
            'lastname_m'=>$request->lastname_m,
            'email_institucional'=>$request->email_institucional,
            'email_personal'=>$request->email_personal,
            'number'=>$request->number,
            'instituto'=>$request->instituto,
            'name_academico'=>$request->name_academico,
            'grade_academico'=>$request->grade_academico,
            'area'=>$request->area
         ]);
         $participantes=Participante::all();
         return view('participantes.index',['participantes'=>$participantes]);
    }
}
