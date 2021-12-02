<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class UsuariosEdit extends Component
{
    use WithFileUploads;
    public Usuario $usuario;
    public $foto;
    public function render()
    {
        return view('livewire.usuarios.usuarios-edit');
    }
    public function editar()
    {
        $this->validate();
        if ($this->foto != null) {
            if ($this->usuario->foto != null) {
                Storage::disk('public')->delete($this->usuario->foto);
            }
            $this->usuario->foto = Storage::disk('public')->put('images/usuarios', $this->foto);
        }
        $this->usuario->save();
        return redirect(route('usuarios.index'));
    }
    protected function rules(){
        return[
                'usuario.nombre_usuario' => 'required|string',
                /*'usuario.foto' => 'nullable|image',*/
                'usuario.email' => 'String|required',
                'usuario.password' => 'string|required',
                'foto'=>'nullable|image'
            ];
    }
}
