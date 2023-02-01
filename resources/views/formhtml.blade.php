<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion</title>
</head>
<body>
    <form action="guardar" method= "post">
        @csrf
        <label for="nombre">NOMBRE</label>
        <imput type="text" name="nombre">
        <br>
        <label for="email">EMAIL</label>
        <imput type="text" name="email">

        <imput type="submit" name="" id="" value="Enviar">
    </form>
</body>
</html>