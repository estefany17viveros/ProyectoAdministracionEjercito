<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Compañías</title>
</head>
<body>
    <h1>Formulario Compañías</h1>
    <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="acti_pri_comp">Ingrese la actividad principal de la compañía:</label><br>
        <input type="text" name="acti_pri_comp"><br>
        <input type="submit" value="Enviar Formulario">
    </form>
</body>
</html>
