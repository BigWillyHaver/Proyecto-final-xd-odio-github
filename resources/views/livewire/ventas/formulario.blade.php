<div>
    <div>
        <div class="mb-3">
        <label class="form-label">Usuario que adquiere la empresa</label>
        <select wire:model="venta.id_usuario" class="form-control">
            @foreach ($usuarios as $usuario)
                <option value="{{$usuario->id}}">{{$usuario->nombre_usuario}} - {{$usuario->email}}</option>
            @endforeach

        </select>
        </div>
        <div class="mb-3">
        <label class="form-label">Empresa</label>
        <select wire:model="venta.id_empresa"  class="form-control">
            @foreach ($empresas as $empresa)
                <option value="{{$empresa->id}}" >{{$empresa->nombre_empresa}} - {{$empresa->rfc}}</option>
            @endforeach
        </select>
        </div>
    </div>
</div>
