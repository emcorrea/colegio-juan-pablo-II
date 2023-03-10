<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicacionDetalle extends Model
{
    use HasFactory;

    public function publicacion()
    {
        return $this->belongsTo(Publicacion::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
}
