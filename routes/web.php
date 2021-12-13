<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Livewire\Empresas\EmpresaIndex;
use App\Http\Livewire\Empresas\EmpresasCreate;
use App\Http\Livewire\Empresas\EmpresasDelete;
use App\Http\Livewire\Empresas\EmpresasEdit;
use App\Http\Livewire\Empresas\EmpresasMostrar;
use App\Http\Livewire\PruebasIndex;
use App\Http\Livewire\Usuarios\UsuariosCreate;
use App\Http\Livewire\Usuarios\UsuariosDelete;
use App\Http\Livewire\Usuarios\UsuariosEdit;
use App\Http\Livewire\Usuarios\UsuariosIndex;
use App\Http\Livewire\Usuarios\UsuariosMostrar;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Producto;
use App\Http\Livewire\Login\Login;
use App\Http\Livewire\Ventas\VentasCreate;
use App\Http\Livewire\Ventas\VentasIndex;
use App\Http\Livewire\Ventas\VentasMostrar;

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

Route::get('/login', Login::class)->name('login');

Route::group(['middleware' => 'auth'], function(){

    Route::get('/alumnos/create', [AlumnoController::class, 'crear']);
    Route::get('/empresas/create', [EmpresaController::class, 'crear']);

    Route::get('/cursos', [CursoController::class,'index']);
    Route::get('/empresas', [EmpresaController::class,'index']);
    Route::get('/pruebas', PruebasIndex::class,'index');
    Route::get('/empresass', EmpresaIndex::class)->name('empresas.index');
    Route::get('/empresas/create', EmpresasCreate::class)->name('empresas.create');
    Route::get('/empresas/{empresa}/delete', EmpresasDelete::class)->name('empresas.delete');
    Route::get('/empresas/{empresa}/edit', EmpresasEdit::class)->name('empresas.edit');
    Route::get('/empresas/{empresa}/mostrar', EmpresasMostrar::class)->name('empresas.mostrar');


    Route::get('/usuarios', UsuariosIndex::class)->name('usuarios.index');
    Route::get('/usuarios/create', UsuariosCreate::class)->name('usuarios.create');
    Route::get('/usuarios/{usuario}/delete', UsuariosDelete::class)->name('usuarios.delete');
    Route::get('/usuarios/{usuario}/mostrar', UsuariosMostrar::class)->name('usuarios.mostrar');
    Route::get('/usuarios/{usuario}/edit', UsuariosEdit::class)->name('usuarios.edit');

    Route::get('/ventas', VentasIndex::class)->name('ventas.index');
    Route::get('/ventas/create', VentasCreate::class)->name('ventas.create');

});
