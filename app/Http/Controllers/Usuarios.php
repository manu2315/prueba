<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Usuario;
class Usuarios extends Controller
{
    
    public function mensaje(){
    	$mensajes = 'Laravel perro!! .i.';
    	return view('/usuario',compact('mensajes',$mensajes));


    }

    public function store(Request $request){

    	$usuario = new Usuario;


    	//modelo->atributo del modelo phpmyadmi(atributo de vista)
    	$usuario->nombre= $request->input('us_nombre');
    	dd($request);
    	//dd (request('us_nombre'));
    	$usuario->descripcion=$request->input('us_descripcion');
    	$usuario->save();

    }
}
