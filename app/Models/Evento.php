<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'sub_title',
        'author',
        'descripcion',
        'date',
        'urlimg'  
    ];

    // Obtener los comentarios
    public function comentarios(){
        // Una publicacion puede tener multiples comentarios
        // return $this->hasMany(Comentario::class)->join('users', 'users.id', '=', 'comentarios.user_id')->where('validacion', 1)->get();
        return $this->hasMany(Comentario::class)->join('users', 'users.id', '=', 'comentarios.user_id')->where('validacion', 1)->select('users.name','users.lastnameP','users.lastnameM', 'comentarios.comentario','comentarios.created_at')->get();
    }
    // Función de likes
    public function likes(){
        return $this->hasMany(Like::class);
    }
    // Revisar si ya tiene like
    public function checkLike(?User $users)
    {
        if ($users) {
            return $this->likes->contains('user_id', $users->id);
        }
        return false;
    }
}
