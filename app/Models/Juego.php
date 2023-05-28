<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Juego extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo_juego', 'max_jugadores', 'min_jugadores', 'tiempo_juego', 'descripccion', 'reglas_juego', 'juego_fav'
    ];

    protected $guarded = [];

    public function images(){
        return $this->hasMany(ImageJuego::class);
    }

    public function pdfs()
    {
        return $this->hasOne(PDFJuego::class, 'juego_id');
    }



    /*public function users(){
        return $this->belongsToMany('App\Models\User')->withTimestamps();
    }*/

    public function user(){
        return $this->belongsTo('App\Models\User')->withTimestamps();
    }

    public function juegos_fav()
    {
        return $this->hasMany('App\Models\JuegoFav');
    }

    public function esFavorito()
    {
        $user = Auth::user();

        if (!$user) {
            return false;
        }

        return JuegoFav::where('user_id', $user->id)
            ->where('juego_id', optional($this)->id)
            ->exists();
    }


    use HasFactory;
}
