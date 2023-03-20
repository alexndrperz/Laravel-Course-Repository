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
<tr>
    <td class="id-s">3DFWF3</td>
    <td>Peaky Blinders Factory</td>
    <td>809-555-5444</td>
    <td>vivaeldinero@gmail.com</td>
    <td>C/ La vida es solo una  #43</td>
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