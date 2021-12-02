<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function crear(){
        $alumno= new Alumno();
        $alumno->expediente = '123123';
        $alumno->nombre_alumno = 'Jorge';
        $alumno->carrera= 'idgs';
        $alumno->edad= 40;
        $alumno->save();
    }
}
