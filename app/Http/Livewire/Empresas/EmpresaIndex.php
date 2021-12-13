<?php

namespace App\Http\Livewire\Empresas;

use App\Models\Empresa;
use Livewire\Component;
use Livewire\WithPagination;

class EmpresaIndex extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;

    public function render()
    {
        $empresas = Empresa::paginate(3);
        return view('livewire.empresas.empresa-index', compact('empresas'));
    }
}
