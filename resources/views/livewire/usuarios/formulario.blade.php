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
                src="{{ Storage::disk('public')->url($usuario->foto != null ? $usuario->foto : 'images/usuarios/default.png') }}"
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
            <label>Nombre de usuario</label>
            <input wire:model="usuario.nombre_usuario" type="text" class="form-control">
            @error('usuario.nombre_usuario') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Email</label>
            <input wire:model="usuario.email" type="text" class="form-control">
            @error('usuario.email') <span class="text-danger">{{ $message }}</span>@enderror

        </div>

        <div class="form-group">
            <label>Contraseña</label>
            <input autocomplete="new-password" wire:model.defer="password" type="password" class="form-control">
            @error('password') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Confirmar contraseña</label>
            <input wire:model="confirmar_password" type="password" class="form-control">
            @error('confirmar_password') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

    </div>



</div>
