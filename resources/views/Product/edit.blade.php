<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    EDITAR PRODUCTO CARAJO

    <br><br>

    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <label for="name">Nombre</label>
        <input type="text" name="name" id="" value="{{ $product->name }}">
        
        <br><br>

        <label for="category">Categoria</label>
        <input type="text" name="category" id="" value="{{ $product->category }}">

        <br><br>
        <button type="submit">Enviar</button>
    </form>

</body>
</html>