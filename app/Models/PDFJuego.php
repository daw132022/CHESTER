<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PDFJuego extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'pdf_juegos';


    public function juego()
    {
        return $this->belongsTo(Juego::class);
    }
}
