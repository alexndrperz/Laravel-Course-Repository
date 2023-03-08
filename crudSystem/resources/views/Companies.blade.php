@extends('Layout')
@section('title','Negocios')
@section('header','Negocios')
@section('hd-table')
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Ubicacion</th>
        <th>Encargados</th>
    </tr>
@endsection
@section('bd-table')
    @if (session('success'))
    @php
     $aos = session('success')   
    @endphp
     
        @foreach (explode('//',$aos) as $row)
            <td>{{$row}}</td>
        @endforeach
    @endif
@endsection