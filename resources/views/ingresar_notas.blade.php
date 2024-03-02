<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ingresar Notas</title>
</head>
<body>
    <form action="{{ route('calcular.promedio') }}" method="POST">
        @csrf
        <input type="number" name="nota1" placeholder="Nota 1" required step="0.01">
        <input type="number" name="nota2" placeholder="Nota 2" required step="0.01">
        <input type="number" name="nota3" placeholder="Nota 3" required step="0.01">
        <button type="submit">Calcular Promedio</button>
    </form>
</body>
</html>



