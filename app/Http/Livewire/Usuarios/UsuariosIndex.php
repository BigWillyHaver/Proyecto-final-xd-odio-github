<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Livewire\Component;
use Livewire\WithPagination;

class UsuariosIndex extends Component
{

    protected $paginationTheme = 'bootstrap';
    public $search;
    use WithPagination;

    public function render()
    {
        $usuarios = Usuario::paginate(3);
        //$usuarios = Usuario::where('nombre_usuario', 'LIKE', '%' . $this->search . '%')
        //    ->orwhere('email', 'LIKE', '%' . $this->search . '%')
        //    ->paginate(3);
        return view('livewire.usuarios.usuarios-index', compact('usuarios'));
    }

}
