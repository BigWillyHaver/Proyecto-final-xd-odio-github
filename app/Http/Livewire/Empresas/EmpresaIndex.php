<?php

namespace App\Http\Livewire\Empresas;

use App\Models\Empresa;
use Livewire\Component;

class EmpresaIndex extends Component
{
    public function render()
    {
        $empresas = Empresa::paginate(7);
        return view('livewire.empresas.empresa-index', compact('empresas'));
    }
}
