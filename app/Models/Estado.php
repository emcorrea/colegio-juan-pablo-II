<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    public function menu()
    {
        return $this->hasMany(Menu::class);
    }

    public function subMenu()
    {
        return $this->hasMany(SubMenu::class);
    }

    public function parametro()
    {
        return $this->hasMany(Parametro::class);
    }

    public function publicacion()
    {
        return $this->hasMany(Publicacion::class);
    }

    public function publicacionDetalle()
    {
        return $this->hasMany(PublicacionDetalle::class);
    }

    public function tipoPublicacionDetalle()
    {
        return $this->hasMany(TipoPublicacionDetalle::class);
    }
}
