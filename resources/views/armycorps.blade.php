<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Army Corps</title>
</head>
<body>
    <h1>Formulario Army Corps</h1>
    <form action="{{ route('armycorps.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="denom_ce">Denominación del Cuerpo del Ejército:</label><br>
        <input type="text" name="denom_ce"><br>
        <input type="submit" value="Enviar Formulario">
    </form>
</body>
</html>
