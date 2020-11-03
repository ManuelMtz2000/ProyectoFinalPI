<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Inventario de productos.</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
        @foreach ($inventario as $inv)
            <tr>
                <td>{{ $inv->id }}</td>
                <td><a href="/inventario/{{ $inv->id }}">{{ $inv->nombre }}</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>