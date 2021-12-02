<div>
    <form wire:submit.prevent="crear">
        <div class="row">
            <div class="col-4">
                <img style="width: 180px;height: 180px;" src="{{$foto != null ? $foto->temporaryUrl() : Storage::disk('public')->url('images/empresas/default.png')}}" alt="" url()>
                <form>
                    <div class="form-group">
                      <label for="exampleFormControlFile1">Subir Imagen</label>
                      <input wire:model="foto" type="file" class="form-control-file" id="exampleFormControlFile1">
                      @error('foto') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                  </form>
            </div>
            <div class="col-6 mx-auto">
                <div class="form-group">
                    <label>Nombre de la empresa</label>
                    <input wire:model="empresa.nombre_empresa" type="text" class="form-control">
                    @error('empresa.nombre_empresa') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label>RFC</label>
                    <input wire:model="empresa.rfc" type="text" class="form-control">
                    @error('empresa.rfc') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label>Direccion</label>
                    <input wire:model="empresa.direccion" type="text" class="form-control">
                    @error('empresa.direccion') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label>Numero</label>
                    <input wire:model="empresa.numero" type="text" class="form-control">
                    @error('empresa.numero') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group mb-2">
                    <label>Codigo Postal</label>
                    <input wire:model="empresa.codigo_postal" type="text" class="form-control">
                    @error('empresa.codigo_postal') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <button class="btn btn-success btn-sm">Guardar</button>
                <a href="{{route('empresas.index')}}" class="btn btn-secondary btn-sm">Regresar</a>

            </div>
    </form>

</div>
</div>
