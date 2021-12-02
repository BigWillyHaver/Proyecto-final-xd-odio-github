<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PruebasIndex extends Component
{
    public $nombre = 'xd';
    public $valor = 0;
    public function render()
    {

        return view('livewire.pruebas-index');
    }
    public function incrementar(){
        $this->valor ++;
    }
    public function decrementar(){
        if ($this->valor > 0){
            $this->valor --;
        }

    }
}
