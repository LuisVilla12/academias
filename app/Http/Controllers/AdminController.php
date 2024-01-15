<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Posts;
use App\Models\Evento;
use App\Models\Comentario;
use App\Models\Publications;
use Illuminate\Http\Request;
use App\Models\RegisterEvent;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('auth')->except(['show','index']);
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function adminPosts()
    {
        $posts = Posts::all();
        return view('admin.posts', ['posts' => $posts]);
    }

    public function adminEventos()
    {
        $eventos = Evento::all();
        return view('admin.eventos', ['eventos' => $eventos]);
    }

    public function adminUsers()
    {
        $users = User::all();
        return view('admin.usuarios', ['users' => $users]);
    }
    public function adminRegisterEvent()
    {
        $registers_event = DB::table('register_event')->join('users', 'users.id', '=', 'register_event.users_id')->join('eventos', 'eventos.id', '=', 'register_event.evento_id')->select('register_event.id', 'register_event.lider', 'register_event.companion', 'users.name', 'users.lastnameP', 'users.lastnameM', 'eventos.title as eventos_title')->orderBy('eventos_title', 'desc')->get();
        return view('admin.inscripciones', ['registers_event' => $registers_event]);
    }

    public function adminComentarios()
    {
        $comentarios = DB::table('comentarios')->join('users', 'users.id', '=', 'comentarios.user_id')->join('eventos', 'eventos.id', '=', 'comentarios.evento_id')->select('comentarios.id', 'users.name', 'users.lastnameP', 'users.lastnameM', 'comentarios.comentario', 'eventos.title as eventos_title')->where('validacion', 0)->orderBy('id', 'asc')->get();
        return view('admin.comentarios', ['comentarios' => $comentarios]);
    }


}
