<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPublicacionDetalle extends Model
{
    use HasFactory;

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function publicacionDetalle()
    {
        return $this->hasMany(PublicacionDetalle::class);
    }
}
