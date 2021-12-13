<div>
    <div>
        <form wire:submit.prevent="editar">
            <div class="card">
                <div class="card-header">
                    Modificar Empresa
                </div>
                <div class="card-body">
                    @include('livewire.empresas.formulario')
                </div>
                <div class="card-footer text-muted">
                    <button wire:loading.attr="disabled" wire:target="foto" class="btn btn-primary btn-sm"><i class="fa fa-iedit"></i> Modificar</button>
                    <a href="{{ route('empresas.index') }}" class="btn btn-secondary btn-sm">Regresar</a>
                </div>
            </div>
        </form>

    </div>

</div>
