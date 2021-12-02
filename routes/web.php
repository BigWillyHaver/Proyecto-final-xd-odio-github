<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Livewire\Empresas\EmpresaIndex;
use App\Http\Livewire\Empresas\EmpresasCreate;
use App\Http\Livewire\Empresas\EmpresasDelete;
use App\Http\Livewire\PruebasIndex;
use App\Http\Livewire\Usuarios\UsuariosCreate;
use App\Http\Livewire\Usuarios\UsuariosDelete;
use App\Http\Livewire\Usuarios\UsuariosEdit;
use App\Http\Livewire\Usuarios\UsuariosIndex;
use App\Http\Livewire\Usuarios\UsuariosMostrar;
use Illuminate\Support\Facades\Route;
use App\Models\Producto;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo/{nombre}', [CursoController::class, 'saludo']);
Route::get('/visitas', [CursoController::class,'visitas']);

Route::get('/cursos/{curso}/{categoria?}', [CursoController::class,'cursos']);

Route::get('/Test/{edad}/{nombre?}', [CursoController::class, 'test']);


Route::get('/usuarios',[CursoController::class, 'index']);

Route::get('/usuarios/create',[CursoController::class, 'create']);

/* si no hay ruta, te regresa un hola xd */
Route::get('/', function(){
    return 'hola';
});

/*
Route::get('/', function(){
    $productos = new Producto();
    $productos->nombre_producto = 'auriculares';
    $productos->cantidad_producto = 12;
    $productos->precio= 3123.93;
    $productos->save();
    dd($productos);
});
*/
Route::get('/alumnos/create', [AlumnoController::class, 'crear']);
Route::get('/empresas/create', [EmpresaController::class, 'crear']);

Route::get('/cursos', [CursoController::class,'index']);
Route::get('/empresas', [EmpresaController::class,'index']);
Route::get('/pruebas', PruebasIndex::class,'index');
Route::get('/empresass', EmpresaIndex::class)->name('empresas.index');
Route::get('/empresas/create', EmpresasCreate::class)->name('empresas.create');
Route::get('/empresass/{empresa}/delete', EmpresasDelete::class)->name('empresas.delete');


Route::get('/usuarios', UsuariosIndex::class)->name('usuarios.index');
Route::get('/usuarios/create', UsuariosCreate::class)->name('usuarios.create');
Route::get('/usuarios/{usuario}/delete', UsuariosDelete::class)->name('usuarios.delete');
Route::get('/usuarios/{usuario}/mostrar', UsuariosMostrar::class)->name('usuarios.mostrar');
Route::get('/usuarios/{usuario}/edit', UsuariosEdit::class)->name('usuarios.edit');
/*
Route::get('/cursos', [CursoController::class, 'index']);

*/
