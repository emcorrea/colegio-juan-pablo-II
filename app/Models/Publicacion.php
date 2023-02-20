<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $table = "publicaciones";
    use HasFactory;

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function publicacionDetalle()
    {
        return $this->hasMany(PublicacionDetalle::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
}
