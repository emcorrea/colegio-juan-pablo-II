<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogFormularioEmailContacto extends Model
{
    protected $fillable = [
        'nombre',
        'email',
        'asunto',
        'mensaje',
        'email_receptor'
    ];

    use HasFactory;
}
