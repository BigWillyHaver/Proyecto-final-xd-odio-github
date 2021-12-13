<div>
    <div class="mx-auto card" style="width: 18rem;">
        <img style="width: 150px;height:150px;" class="mx-auto mt-3 card-img-top"
            src="{{ $empresa->foto != null ? Storage::disk('public')->url($empresa->foto) : Storage::disk('public')->url('images/empresas/default.png') }}" alt="Card image cap">
        <div class="text-center card-body">
            <h5 class="card-title">Nombre de la empresa: {{ $empresa->nombre_empresa }}</h5>
            <span class="card-text">RFC: {{ $empresa->rfc }}</span><br>
            <a href="{{route('empresas.index')}}" class="btn btn-primary d-block"><i class="fa fa-home"></i>Regresar</a>
        </div>
    </div>
</div>

