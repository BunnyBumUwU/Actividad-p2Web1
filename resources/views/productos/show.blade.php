<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Producto</title>
</head>
<body>
    <h1>Detalles del Producto</h1>

    <p><strong>ID:</strong> {{ $producto->id }}</p>
    <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
    <p><strong>Precio:</strong> {{ $producto->precio }}</p>
    <p><strong>Stock:</strong> {{ $producto->stock }}</p>

    <a href="{{ route('productos.index') }}">Volver</a>
</body>
</html>
