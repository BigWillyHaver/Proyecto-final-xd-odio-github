<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use App\Http\Livewire\Usuarios\RulesUsuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class UsuariosCreate extends Component
{
    use WithFileUploads;
    public Usuario $usuario;
    public $foto;
    public $password;
    public $confirmar_password;

    public function mount(){
        $this->usuario = new Usuario();
    }

    public function render()
    {
        return view('livewire.usuarios.usuarios-create');
    }

    public function crear(){
        $this->validate();
        $this->usuario->password =Hash::make($this->password);
        if ($this->foto != null) {
            $this->usuario->foto = Storage::disk('public')->put('images/usuarios', $this->foto);
        }
        $this->usuario->save();
        return redirect(route('usuarios.index'));
    }

    protected function rules($id = null){
        $id = $this->usuario->id;
        $validarPassword = ($id) ? 'nullable|min:8' : 'required|min:8';
        return[
                'usuario.nombre_usuario' => 'required|string',
                'usuario.email' => 'email|required|unique:usuarios,email, ' .$id,
                'foto'=>'nullable|image',
                'password' => $validarPassword,
                'confirmar_password'=>'same:password'

            ];
        }

    // protected function rules($id=null){

    //     return[
    //             'usuario.nombre_usuario' => 'required|string',
    //             'usuario.email' => 'email|required|unique:usuarios,email, ' .$id,
    //             'foto'=>'nullable|image',
    //             'usuario.password' => 'nullable|min:8',
    //             'confirmar_password'=>'same:usuario.password'

    //         ];
    // }

}
