<div>
    <div>
        <div class="col-md d-flex justify-content-center mb-2">
            <a href="{{route('ventas.create')}}" type="button" class="btn btn-sm btn-success"><i class="fa fa-plus-circle"></i> Crear nueva venta</a>
        </div>

            <table class="table table-hover table-dark text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre usuario</th>
                        <th scope="col">Empresa adquirida</th>
                        <th scope="col">Fecha de compra</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($ventas as $venta)
                        <tr>
                            <th scope="row">{{ $venta->id }}</th>

                            <td>{{ $venta->nombre_usuario }}</td>
                            <td><span class="badge alert-dark">{{ $venta->nombre_empresa }}</span></td>
                            <td><span class="badge alert-primary">{{ $venta->created_at }}</span></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $ventas->links() }}


    </div>
</div>
