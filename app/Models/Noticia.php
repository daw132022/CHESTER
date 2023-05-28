<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable = [
        'titulo_noticia',
        'fecha',
        'categoria',
        'texto_noticia',

    ];

    protected $guarded = [];

    public function comentarios(){
        return $this->hasMany('App\Models\Comentario');

    }

    public function images(){
        return $this->hasMany(ImageNoticia::class);
    }


    use HasFactory;
}
