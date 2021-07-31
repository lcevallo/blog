<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //metodo encargado de buscar la pagina principal
    public function index(){
        return view('cursos.index');
    }

    //metodo encargado de mostrar un formulario para que puedas crear
    public function create(){
        return view('cursos.create');
    }

    //metodo encargado de mostrar un elemento
    public function show($curso){

        compact('curso'); // ['curso' => $curso]
        // return view('cursos.show',['curso'=>$curso]);
        return view('cursos.show',compact('curso'));
    }
}
