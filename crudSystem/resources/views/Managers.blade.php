@extends('Layout')

@section('title','Encargados')
@section('header','Encargados')
@section('hd-table')
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Ubicacion</th>
        @if (request()->routeIs('managers'))
            <th>Empresa</th>
        @endif

    </tr>
@endsection