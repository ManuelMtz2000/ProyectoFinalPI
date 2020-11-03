<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Información del producto.</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
            <tr>
                <td>{{ $inventario->id }}</td>
                <td>{{ $inventario->nombre }}</td>
            </tr>
    </table>
</body>
</html>