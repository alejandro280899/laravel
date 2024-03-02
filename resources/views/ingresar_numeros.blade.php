<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verificar Números Amigos</title>
</head>
<body>
    <form action="{{ route('verificar.amigos') }}" method="POST">
        @csrf
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" id="numero1" required>
        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" id="numero2" required>
        <button type="submit">Verificar</button>
    </form>
</body>
</html>
