<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verificar Número Primo</title>
</head>
<body>
    <form action="{{ route('primo.store') }}" method="POST">
        @csrf
        <label for="numero">Ingrese un número:</label>
        <input type="number" name="numero" required>
        <button type="submit">Verificar</button>
    </form>
</body>
</html>
