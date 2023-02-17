<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public function menu()
    {
        return $this->hasMany(Menu::class);
    }

    public function publicacion()
    {
        return $this->hasMany(Publicacion::class);
    }
}
