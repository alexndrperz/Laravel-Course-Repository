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
@section('bd-table')
<tr>
    <td class="id-s">3D3</td>
    <td>Alan Alexander</td>
    <td>Perez</td>
    <td>809-333-3323</td>
    <td>alan80perez@gmail.com</td>
    <td>C/amigos puros amigos</td>
    <td><a href="#"><button class="btn btn-outline-primary" style="padding:2px 14px;">Ver</button></a></td>
</tr>

<tr>
    @if (session('success'))
    @php
     $data = session('success')   
    @endphp
        @foreach (explode('//',$data) as $row)
            <td>{{$row}}</td>
        @endforeach
        <td><a href="#"><button class="btn btn-outline-primary" style="padding:2px 14px;">Ver</button></a></td>
    @endif
</tr>
@endsection