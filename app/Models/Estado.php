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
}
