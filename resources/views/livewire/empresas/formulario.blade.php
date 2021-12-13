<div class="row">


    <div wire:loading wire:target="foto" class="align-items-center">
        <strong>Loading...</strong>
        <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
    </div>



    <div class="col-4">

        @if ($foto != null)
            <img style="width: 200px;height:200px;" src="{{ $foto->temporaryUrl() }}" alt="">
        @else
            <img style="width: 200px;height:200px;"
                src="{{ Storage::disk('public')->url($empresa->foto != null ? $empresa->foto : 'images/empresas/default.png') }}"
                alt="">
        @endif

            <form>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Subir Imagen</label>
                    <input wire:model="foto" type="file" class="form-control-file" id="exampleFormControlFile1">
                    @error('foto') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </form>
    </div>

    <div class="mx-auto col-6">
        <div class="form-group">
            <label>Nombre de empresa</label>
            <input wire:model="empresa.nombre_empresa" type="string" class="form-control">
            @error('empresa.nombre_empresa') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>RFC</label>
            <input wire:model="empresa.rfc" type="string" class="form-control">
            @error('empresa.rfc') <span class="text-danger">{{ $message }}</span>@enderror

        </div>

        <div class="form-group">
            <label>Direccion</label>
            <input wire:model="empresa.direccion" type="string" class="form-control">
            @error('empresa.direccion') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Numero</label>
            <input wire:model="confirmar_password" type="String" class="form-control">
            @error('empresa.numero') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Codigo Postal</label>
            <input wire:model="confirmar_password" type="String" class="form-control">
            @error('empresa.codigo_postal') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

    </div>



</div>
