<h1>cuadratica</h1>

<form action="{{route('cuadratica.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    ingresa tu primer valor:
    <br>
    <input type="number" name="a">
</label>
<br>
<label>
    Ingresa tu segundo valor: 
    <br>
    <input type="number" name="b">
</label>
<br>
<label>
    Ingresa tu tercerc valor: 
    <br>
    <input type="number" name="c">
</label>
<br><br><br>

<button type="submit">Enviar Formulario:</button>
</form>