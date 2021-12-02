<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    /*
    public function saludo($nombre){
        return 'Hola soy ' .$nombre;
    }

    public function visitas(){
        return 'visitas xd';
    }

    public function cursos($cursos, $categoria = null){
        if($categoria == null){
            return 'El curso ' .$cursos ;
        } else {
            return 'El curso ' .$cursos .  ' de la categoria ' .$categoria ;
        }

    }

    public function Test($edad, $nombre = null){
        if($nombre == null && $edad > 18){
            return 'Tiene ' .$edad . ' años de edad, es mayor de edad';
        } else if($nombre != null && $edad >18){
            return 'Su nombre es ' .$nombre .  ' y tiene ' .$edad . ' años de edad, es mayor de edad';


        } else if($nombre == null && $edad <18){
            return 'Tiene ' .$edad . ' años de edad, es menor de edad';
        } else if($nombre != null && $edad <18){
            return 'Su nombre es ' .$nombre .  ' y tiene ' .$edad . ' años de edad, es menor de edad';
        //Por si las dudas xd
        } else {
            return 'nnose XDD';
        }
    }
*/
    public function index(){

        //dd('Hola desde el index');
        $cursos = Curso::all();
        return $cursos;
        return view('cursos.index');

        /*$nombre = 'Jorge';
        $apellido = 'Morales';
        $edad = '21';
        return view('usuarios.index',compact('nombre', 'apellido', 'edad'));
        */
    }
}
    /*

    public function create(){
        $nombre = 'Jorge';
        $apellido = 'Morales';
        $edad = '21';
        return view('usuarios.create',compact('nombre', 'apellido', 'edad'));
    }
}
*/
/*
*Esto el profe lo pone dentro de un ***public function index(){} *** en el controller
y lo manda a llamar en web con algo asi ***Route::get('/cursos', [CursoController::class, 'index']);***

muestra todo
$cursos = Curso::all();

es como un return pero mas chido
dd($curso);

Con el get muestra todos los que tengan backend
$cursos = Curso::where('categoria', 'backend')->get();

te da el primer objeto con lo que le pides y te lo da fuera de un arreglo
$cursos = Curso::where('id', 1)->first();

Encuentra el registro que se le pide xddd
$cursos = Curso::find(1);

$cursos = Curso::where('precio', '>', 500)->get;

este es como si fuera el and
$cursos = Curso::where('categoria', 'backend')->where('precio','>',500)->get;

este es como si fuera el or xd
$cursos = Curso::where('categoria', 'backend')->orwhere('precio','>',500)->get;

Este sirve para  checar campos en especifico.
$cursos = Curso::where('precio', '>', 500)->select('curso','precio')->get;

Este sirve para renombrar los campos en especifico que se estan sacando y ponerles un nombre diferente.
$cursos = Curso::where('precio', '>', 500)->select('curso as nombre del curso','precio as precio del curso')->get;

ordena los cursos y da el curso mas caro al mas bajo. se usa asc para hacerlo alrevez.
$cursos::orderBy('precio','desc')->get();

No retorna los registros, pero te dice cuantos registros hay con esas especificaciones.
$cursos = Curso::where('categoria', 'backend')->count();



*/
