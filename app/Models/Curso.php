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

    /**
     * @param $fillable
     * con la variable $fillable ponemos solo los campos que queremos guardar
     * con la variable guarded ponemos solo el CAMPO que queremos obviar, por ejemplo el campo "status" de una tabla, por ejemplo se quedara vacio
     */
    //protected $fillable = ['name', 'descripcion'];
    protected $guarded = [];
}
