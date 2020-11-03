<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
    <form action="{{ route('inventario.store')}}" method="POST">
        @csrf
        <label for="nombre">Nombre del producto:</label>
        <input type="text" name="nombre" value="{{ old('nombre') }}"><br>
        <label for="categoria">Categoria: </label>
        <select name="categoria">
            <option value="sonido" {{ old('categoria') == 'sonido' ? 'selected' : '' }}>Sonido</option>
            <option value="accesorios" {{ old('categoria') == 'accesorios' ? 'selected' : '' }}>Accesorios para celular</option>
            <option value="otros" {{ old('categoria') == 'otros' ? 'selected' : '' }}>Otros</option>
        </select><br>
        <label for="precio">Precio: </label>
        <input type="number" name="precio" value="{{ old('precio') }}"><br>
        <label for="precio_cliente">Preco para cliente: </label>
        <input type="number" name="precio_cliente" value="{{ old('precio_cliente') }}"><br>
        <label for="cantidad">Cantidad: </label>
        <input type="number" name="cantidad" value="{{ old('cantidad') }}"><br>
        <label for="descripcion">Descripcion del producto: </label>
        <textarea name="descripcion"cols="30" rows="10">{{ old('descripcion') }}</textarea><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>