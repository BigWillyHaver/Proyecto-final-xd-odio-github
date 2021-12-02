<div>
    <div class="col-md d-flex justify-content-center mb-2">
        <a href="{{route('usuarios.create')}}" type="button" class="btn btn-sm btn-success"><i class="fa fa-plus-circle"></i> Crear un usuario nuevo</a>
    </div>
        <table class="table table-hover table-dark text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th>Foto</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($usuarios as $usuario)
                    <tr>
                        <th scope="row">{{ $usuario->id }}</th>
                        <th>
                            <img style="width: 60px; height: 60px;" src="{{Storage::disk('public')->url($usuario->foto ? $usuario->foto : 'images/usuarios/default.png')}}">
                        </th>
                        <td>{{ $usuario->nombre_usuario }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>
                            <a title="Mostrar mas" href="{{route('usuarios.mostrar', $usuario)}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></button>
                            <a title="Editar" href="{{route('usuarios.edit', $usuario)}}" class="btn btn-primary btn-sm"><i class="fa fa-cog"></i></button>
                            <a title="Eliminar" href="{{route('usuarios.delete', $usuario)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </tr>
                @endforeach

            </tbody>
        </table>
        {{ $usuarios->links() }}


</div>

