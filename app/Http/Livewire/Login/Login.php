<?php

namespace App\Http\Livewire\Login;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.login.login');
    }

    public function login(){

        // Swal.fire({
        //     icon: 'error',
        //     title: 'Oops...',
        //     text: 'Something went wrong!',
        //     footer: '<a href="">Why do I have this issue?</a>'
        //   })

        $datos = $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect(route('empresas.index'));
        } else {
            $this->emit('alerta', 'verificar correo o contraseña');
        }
    }

    public function rules(){
        return [
            'email' => 'required|email',
            'password' => 'min:8|string|required'
        ];
    }
}
