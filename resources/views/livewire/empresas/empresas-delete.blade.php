<div>
    <div class="card mx-auto" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$empresa->nombre_empresa}}</h5>
          <p class="card-text">RFC: {{$empresa->rfc}}</p>
          <button wire:click="delete" class="btn btn-primary btn-sm">Confirmar</button>
          <a href="{{route('empresas.index')}}" class="btn btn-secondary btn-sm">Cancelar</a>
        </div>
      </div>
</div>
