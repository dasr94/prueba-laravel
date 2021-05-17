<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{

    /**
     * para manejar otra tabla
     * protected $table = "nombre_de_tabla";
     */
    use HasFactory;

    protected $fillable = ['name', 'descripcion'];
}
