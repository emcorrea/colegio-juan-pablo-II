<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicacionDetalle extends Model
{
    protected $fillable = ['contenido', 'publicacion_id', 'tipo_publicacion_detalle_id', 'data_atributo', 'estado_id'];
    use HasFactory;

    public function publicacion()
    {
        return $this->belongsTo(Publicacion::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function tipoPublicacionDetalle()
    {
        return $this->belongsTo(TipoPublicacionDetalle::class);
    }
}
