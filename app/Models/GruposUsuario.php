<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GruposUsuario extends Model
{
    protected $table = 'grupos_usuario';

    protected $fillable = [
        'id',
        'codigo',
        'descricao',
    ];
}
