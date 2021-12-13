<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use phpDocumentor\Reflection\Types\Nullable;

class UsuariosEdit extends Component
{
    use WithFileUploads;
    public Usuario $usuario;
    public $foto;
    public $password;
    public $confirmar_password;
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
        if ($this->password) {
            $this->usuario->password = Hash::make($this->password);
        }
        $this->usuario->save();
        return redirect(route('usuarios.index'));
    }
    protected function rules($id = null){
        $id = $this->usuario->id;
        return[
                'usuario.nombre_usuario' => 'required|string',
                'usuario.email' => 'email|required|unique:usuarios,email, ' .$id,
                'foto'=>'nullable|image',
                'password' => 'nullable|min:8',
                'confirmar_password'=>'same:password'

            ];
        }
}

