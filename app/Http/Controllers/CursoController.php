<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //metodo encargado de buscar la pagina principal
    public function index(){
        return "Bienvenido a la pagina principal de cursos";
    }

    //metodo encargado de mostrar un formulario para que puedas crear
    public function create(){
        return "En esta pagina podras crear un curso ";
    }

    //metodo encargado de mostrar un elemento
    public function show($curso){
        return "Bienvenido al curso $curso";
    }
}
