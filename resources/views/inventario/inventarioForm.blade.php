@extends('layouts.app')
@section('contenido')
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h1>Información del producto.</h1>
    <hr class="sidebar-divider">
    @if(isset($inventario))
        <form action="{{ route('inventario.update',[$inventario])}}" method="POST">
            @method('patch')
    @else
        <form action="{{ route('inventario.store')}}" method="POST">
    @endif
        @csrf
        <div class="form-group">
            <label for="nombre" class="col-lg-3">Nombre del producto:</label>
            <input type="text" name="nombre" value="{{ old('nombre') ?? $inventario->nombre ?? ''}}" style="width: 400px; heigth: 15px"><br>
        </div>
        <div class="form-group text-">
            <label for="categoria" class="col-lg-3">Categoria: </label>
            <select name="categoria" style="width: 400px; heigth: 15px">
                <option value="sonido" {{ old('categoria') == 'sonido' ? 'selected' : '' }}{{ isset($inventario) && $inventario->categoria == 'sonido' ? 'selected' : ''}}>Sonido</option>
                <option value="accesorios" {{ old('categoria') == 'accesorios' ? 'selected' : '' }}{{ isset($inventario) && $inventario->categoria == 'accesorios' ? 'selected' : ''}}>Accesorios para celular</option>
                <option value="otros" {{ old('categoria') == 'otros' ? 'selected' : '' }}{{ isset($inventario) && $inventario->categoria == 'otros' ? 'selected' : ''}}>Otros</option>
            </select><br>
        </div>
        <div class="form-group">
            <label for="precio" class="col-lg-3">Precio: </label>
            <input type="number" name="precio" value="{{ old('precio') ?? $inventario->precio ?? ''}}" style="width: 400px; heigth: 15px"><br>
        </div>
        <div class="form-group">
            <label for="precio_cliente" class="col-lg-3">Preco para cliente: </label>
            <input type="number" name="precio_cliente" value="{{ old('precio_cliente') ?? $inventario->precio_cliente ?? ''}}" style="width: 400px; heigth: 15px"><br>
        </div>
        <div class="form-group">
            <label for="cantidad" class="col-lg-3">Cantidad: </label>
            <input type="number" name="cantidad" value="{{ old('cantidad') ?? $inventario->cantidad ?? ''}}" style="width: 400px; heigth: 15px"><br>
        </div>
        <div class="form-group">
            <label for="descripcion" class="col-lg-3">Descripcion del producto: </label>
            <textarea name="descripcion"cols="47" rows="10"">{{ old('descripcion') ?? $inventario->descripcion ?? ''}}</textarea><br>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <br>
    </form>
@endsection