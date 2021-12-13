<?php

namespace App\Http\Livewire\Empresas;

use App\Models\Empresa;
use Livewire\Component;

class EmpresasMostrar extends Component
{
    public Empresa $empresa;
    public function render()
    {
        return view('livewire.empresas.empresas-mostrar');
    }
}
