<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Venta;
use Livewire\Component;
use Livewire\WithPagination;

class VentasIndex extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public function render()
    {
        $ventas = Venta::join('usuarios','ventas.id_usuario','=','usuarios.id')
        ->join('empresas','ventas.id_empresa', '=' , 'empresas.id')
        ->select('ventas.*','usuarios.nombre_usuario','usuarios.email', 'empresas.nombre_empresa')->paginate(3);

        return view('livewire.ventas.ventas-index', compact('ventas'));
    }

}
