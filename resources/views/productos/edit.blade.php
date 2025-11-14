<!DOCTYPE html>
<html>
<head>
    <title>Editar Producto</title>
</head>
<body>
    <h1>Editar Producto</h1>

    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre:</label><br>
        <input type="text" name="nombre" value="{{ $producto->nombre }}" required><br><br>

        <label>Precio:</label><br>
        <input type="number" step="0.01" name="precio" value="{{ $producto->precio }}" required><br><br>

        <label>Stock:</label><br>
        <input type="number" name="stock" value="{{ $producto->stock }}" required><br><br>

        <button type="submit">Actualizar</button>
    </form>

    <br>
    <a href="{{ route('productos.index') }}">Volver</a>
</body>
</html>
