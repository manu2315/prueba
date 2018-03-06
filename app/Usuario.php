<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	//Tabla a utilizar
    protected $table = 'usuarios';

    //atributos
    protected $fillable = ['nombre','descripcion'];

    
}
