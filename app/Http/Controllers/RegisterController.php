<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function create(){
        return view('auth.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required|min:3|max:20',
            'lastnameP'=>['required','min:5','max:20'],
            'lastnameM'=>['required','min:5','max:20'],
            'email'=>['required','min:10','unique:users'],
            'password'=>['required','min:9','confirmed']
        ]);

        // dd('creando usuario');
        User::create([
            'name'=>$request->name,
            'lastnameP'=>$request->lastnameP,
            'lastnameM'=>$request->lastnameM,
            'email'=>$request->email,
            'type'=>$request->type,
            'password'=>Hash::make($request->password)
        ]);
         // Otra forma de autenticar
         auth()->attempt($request->only('email','password'));

         // Redireccionar
         return redirect()->route('index');
    }
}
