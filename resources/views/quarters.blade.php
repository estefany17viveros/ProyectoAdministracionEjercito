<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Quarters</title>
</head>
<body>
    <h1>Formulario Quarters</h1>
    <form action="{{ route('quarters.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nom_cuartel">Nombre del Cuerpo del Ejército:</label><br>
        <input type="text" name="nom_cuartel"><br>
        <label for="ubic">ubicacion del Cuerpo del Ejército:</label><br>
        <input type="text" name="ubic"><br>
        <input type="submit" value="Enviar Formulario">
    </form>
</body>
</html>
