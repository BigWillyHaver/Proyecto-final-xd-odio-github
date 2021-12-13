<?php

namespace App\Http\Livewire\Empresas;

use App\Models\Empresa;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EmpresasEdit extends Component
{
    use WithFileUploads;
    public Empresa $empresa;
    public $foto;
    public function render()
    {
        return view('livewire.empresas.empresas-edit');
    }
    public function editar()
    {
        $this->validate();
        if ($this->foto != null) {
            if ($this->empresa->foto != null) {
                Storage::disk('public')->delete($this->empresa->foto);
            }
            $this->empresa->foto = Storage::disk('public')->put('images/empresas', $this->foto);
        }
        $this->empresa->save();
        return redirect(route('empresas.index'));
    }
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

