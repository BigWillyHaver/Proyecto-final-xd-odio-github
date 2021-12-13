<?php

namespace App\Http\Livewire\Ventas;
use App\Models\Usuario;
use App\Models\Empresa;
use App\Models\Venta;
use Livewire\Component;

class VentasCreate extends Component
{
    public Venta $venta;

    public function mount(){
        $this->venta = new Venta();
    }

    public function render()
    {
        $empresas = Empresa::all();
        $usuarios = Usuario::all();
        return view('livewire.ventas.ventas-create', compact('empresas','usuarios'));
    }

    public function crear(){
        $this->validate();
        $this->venta->save();
        $this->emit('alertaxd', 'Se realizo con exito la venta de la empresa');
    }

    public static function rules(){
        return[
            'venta.id_usuario'=>'required',
            'venta.id_empresa'=>'required',
        ];
    }
}
