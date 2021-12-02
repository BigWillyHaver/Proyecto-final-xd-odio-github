<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    //protected $paginationTheme='bootstrap';
    public function crear(){
        $empresa = new Empresa();
        $empresa->nombre_empresa = 'wat the dog doin';
        $empresa->rfc =  'g943g4934';
        $empresa->direccion = 'eeeiieeii ahi;';
        $empresa->numero = 8124843893;
        $empresa->codigo_postal = 96239;
        $empresa->save();
    }
    public function index(){

        //dd('Hola desde el index');
        $empresas = Empresa::paginate(3);

        return view('empresas.index', compact('empresas'));

        /*$nombre = 'Jorge';
        $apellido = 'Morales';
        $edad = '21';
        return view('usuarios.index',compact('nombre', 'apellido', 'edad'));
        */
    }
}
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
