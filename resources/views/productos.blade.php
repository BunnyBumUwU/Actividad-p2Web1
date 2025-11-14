<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
</head>
<body>
    <h1>Lista de Productos</h1>

    <ul>
        @foreach ($productos as $p)
            <li>{{ $p->nombre }} - ${{ $p->precio }}</li>
        @endforeach
    </ul>

</body>
</html>
