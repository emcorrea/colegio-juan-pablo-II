<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function subMenu()
    {
        return $this->hasMany(SubMenu::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
