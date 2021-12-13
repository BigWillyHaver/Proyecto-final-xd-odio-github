<div>

    <!--
    <x-boton color="success">
        <x-slot name="contenido">
            aceptar
        </x-slot>
    </x-boton>

    <x-boton color="">
        <x-slot name="contenido">
            Modificar
        </x-slot>
    </x-boton>
    -->

    <!--
    <div class="row">
        <div class="col-md d-flex justify-content-center">
            <x-card color="danger">
                <x-slot name="titulo">
                    Alumnos
                </x-slot>
                <x-slot name="subtitulo">
                    Area contable
                </x-slot>
                <x-slot name="body">
                    Hola XD se me cayo la cabra la otravez que andaba cargando la cabra al cabramovil y se desmayo.
                </x-slot>
            </x-card>
        </div>
        <div class="col-md d-flex justify-content-center">
            <x-card color="primary">
                <x-slot name="titulo">
                    Docentes
                </x-slot>
                <x-slot name="subtitulo">
                    Area de soporte
                </x-slot>
                <x-slot name="body">
                    El estado de israel no existe pero la ciudad de taiwan es algo que si existe XD.
                </x-slot>
            </x-card>
        </div>
    </div>



    <br>
-->
    <div class="col-md d-flex justify-content-center mb-2">
        <a href="{{route('empresas.create')}}" type="button" class="btn btn-sm btn-success"><i class="fa fa-plus-circle"></i> Crear una empresa nueva</a>
    </div>

    <table class="table table-hover table-dark text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th>Imagen</th>
                <th scope="col">Empresa</th>
                <th scope="col">Rfc</th>
                <th scope="col">Direccion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empresas as $empresa)
                <tr>
                    <th scope="row">{{ $empresa->id }}</th>
                    <th>
                        <img style="width: 60px; height: 60px;" src="{{Storage::disk('public')->url($empresa->foto ? $empresa->foto : 'images/empresas/default.png')}}">
                    </th>
                    <td>{{ $empresa->nombre_empresa }}</td>
                    <td>{{ $empresa->rfc }}</td>
                    <td>{{ $empresa->direccion }}</td>
                    <td>
                        <a title="Mostrar mas" href="{{route('empresas.mostrar', $empresa)}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></button>
                        <a title="Editar" href="{{route('empresas.edit', $empresa)}}" class="btn btn-primary btn-sm"><i class="fa fa-cog"></i></button>
                        <a title="Eliminar" href="{{route('empresas.delete', $empresa)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{ $empresas->links() }}


</div>
