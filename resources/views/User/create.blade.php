<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    CREANDO USUARIO CARAJO

    <br><br>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <label for="name">Nombre</label>
        <input type="text" name="name" id="">
        
        <br><br>

        <label for="email">Correo</label>
        <input type="text" name="email" id="">

        <br><br>

        <label for="password">Contraseña</label>
        <input type="text" name="password" id="">

        <br><br>
        <button type="submit">Enviar</button>
    </form>

</body>
</html>