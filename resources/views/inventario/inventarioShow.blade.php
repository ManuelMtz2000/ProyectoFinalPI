@extends('layouts.app')
@section('contenido')
    <h1>Información del producto.</h1>
    <a href="{{ route('inventario.edit', [$inventario->id]) }}">Editar información del producto.</a>
    <br>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Precio</th>
            <th>Precio para clientes</th>
            <th>Cantidad disponible</th>
            <th>Descripción</th>
        </tr>
            <tr>
                <td>{{ $inventario->id }}</td>
                <td>{{ $inventario->nombre }}</td>
                <td>{{ $inventario->categoria }}</td>
                <td>{{ $inventario->precio}}</td>
                <td>{{ $inventario->precio_cliente }}</td>
                <td>{{ $inventario->cantidad }}</td>
                <td>{{ $inventario->descripcion }}</td>
            </tr>
    </table>
    <form action="{{ route('inventario.destroy',[$inventario]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endsection