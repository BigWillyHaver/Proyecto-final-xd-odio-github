@extends('layouts.plantilla')

@section('seccion')
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
<br>
<table class="table table-hover table-dark text-center">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Empresa</th>
        <th scope="col">Rfc</th>
        <th scope="col">Direccion</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($empresas as $empresa)
      <tr>
        <th scope="row">{{$empresa->id}}</th>
        <td>{{$empresa->nombre_empresa}}</td>
        <td>{{$empresa->rfc}}</td>
        <td>{{$empresa->direccion}}</td>
      </tr>
      @endforeach

    </tbody>
  </table>
  {{$empresas->links()}}

@endsection
