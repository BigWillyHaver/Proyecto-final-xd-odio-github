<?php

namespace App\Http\Livewire\Empresas;

use App\Models\Empresa;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EmpresasDelete extends Component
{
    use WithFileUploads;
    public Empresa $empresa;
    public $foto;
    public function render()
    {
        return view('livewire.empresas.empresas-delete');
    }

    public function delete(){
        /*if ($this->foto != null){
            if ($this->empresa->foto != null) {
                Storage::disk('public')->delete($this->empresas->foto);
            }
            $this->empresa->foto = Storage::disk('public')->put('images/empresas', $this->foto);
        }*/

        Storage::disk('public')->delete('images/empresas', $this->foto);
        Storage::disk('public')->delete($this->empresa->foto);

        $this->empresa->delete();
        return redirect(route('empresas.index'));
    }
}
