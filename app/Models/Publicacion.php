<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;
    protected $table = "publicaciones";
    protected $fillable = ['nombre', 'descripcion', 'fecha', 'importante', 'path', 'categoria_id', 'user_id', 'estado_id'];

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

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
