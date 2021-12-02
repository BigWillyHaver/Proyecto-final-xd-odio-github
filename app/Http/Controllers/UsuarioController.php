<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{

    public function index(){

        $usuarios = Usuario::paginate(7);

        return view('usuarios.index', compact('usuarios'));

    }
}
