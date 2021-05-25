<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;
class Publicacion extends Model
{
    protected $table = 'Publicacion';

    use HasFactory, Commentable;
    public function user(){
        return $this->belongsTo('App\Models\User', 'id_usuario');
    }
    protected $fillable = ['descripcion', 'foto', 'id_usuario','created_at'];
    
}
