<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    INDEX PRODUCTO

    <br>

    <a href="{{ route('product.create') }}">Crear producto carajo</a>

    <h1>Productos</h1>
    @foreach ($products as $product)
        
        Nombre producto: <a href="{{ route('product.show',$product) }}">{{$product->name}} </a> <br>
        Categoria producto:{{$product->category}}
        <br><br>
    @endforeach
</body>
</html>