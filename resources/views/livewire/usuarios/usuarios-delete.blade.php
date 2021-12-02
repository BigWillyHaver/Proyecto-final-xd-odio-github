<div>
    <div class="mx-auto card" style="width: 18rem;">
        <img style="width: 150px;height:150px;" class="mx-auto mt-3 card-img-top" src="{{$usuario->foto != null ? Storage::disk('public')->url($usuario->foto) : Storage::disk('public')->url('images/empresas/default.png') }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nombre de usuario: {{$usuario->nombre_usuario}}</h5>
          <p class="card-text">Email: {{$usuario->email}}</p>
          <button wire:click="delete" class="btn btn-primary btn-sm">Confirmar</button>
          <a href="{{route('usuarios.index')}}" class="btn btn-secondary btn-sm">Cancelar</a>
        </div>
      </div>
</div>
