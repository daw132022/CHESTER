<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JuegoFav extends Model
{

    protected $fillable = [
        'user_id',
        'juego_id',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function juego(){
        return $this->belongsTo('App\Models\Juego');
    }

    use HasFactory;
}
