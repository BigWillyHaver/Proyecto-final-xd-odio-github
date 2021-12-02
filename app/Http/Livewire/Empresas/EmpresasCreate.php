<?php

namespace App\Http\Livewire\Empresas;

use App\Models\Empresa;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EmpresasCreate extends Component
{

    use WithFileUploads;
    public Empresa $empresa;
    public $foto;

    public function mount(){
        $this->empresa = new Empresa();
    }


    public function render()
    {
        return view('livewire.empresas.empresas-create');
    }

    public function crear(){

        $this->validate();
        if ($this->foto != null){
            $this->empresa->foto = Storage::disk('public')->put('images/empresas', $this->foto);
        }

        $this->empresa->save();
        return redirect(route('empresas.index'));
    }

    //validaciones, son importantes, aunque no las ocupes validar, tu ponlas xd
    protected function rules(){
        return[
            'empresa.nombre_empresa'=>'required|string',
            'empresa.rfc' =>'required|string',
            'empresa.direccion'=>'required|string',
            'empresa.numero'=>'numeric|required',
            'empresa.codigo_postal'=>'required|numeric',
            'foto'=>'nullable|image'
        ];
    }
}
