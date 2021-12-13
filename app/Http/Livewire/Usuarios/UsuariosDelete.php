<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class UsuariosDelete extends Component
{
    use WithFileUploads;
    public Usuario $usuario;
    public $foto;
    public function render()
    {
        return view('livewire.usuarios.usuarios-delete');
    }

    public function delete(){

        Storage::disk('public')->delete('images/usuarios', $this->foto);
        Storage::disk('public')->delete($this->usuario->foto);
        

        $this->emit('usuarioDelete', 'Estas a punto de borrar un usuario');

        $this->usuario->delete();
        return redirect(route('usuarios.index'));

    }
}
