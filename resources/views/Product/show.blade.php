<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <title>Document</title>
</head>-->
<x-mi-layout>
<body>
    <header>
        <div class="divHeaders" id="divHeaderShowP">
            <div class="divHeaderTitles" id="divHeaderTitle4">
                <h1 class="headerH1">{{$product->name}}</h1>
            </div><!--divHeaderTitle end-->
        </div>  <!--divHeader end-->
    <br>
    </header>

    <main>
        <div class="divMains" id="divMainShowP">
            <div class="divRedirects" id="divRedirectPS">
                <h2 class="headerRedirect"><a href="{{ route('product.index') }}" class="btn btn-primary" role="button">Regresar a productos</a></h2>
                <!--<h2 class="headerRedirects"><a href="/">Página principal</a></h2>-->
            </div><!--divRedirects end-->
            <br>
            <div class="divLists">
                <h2>Nombre del producto - {{$product->name}}</h2>
                <h2>Categoría - {{$product->category->name}}</h2>
                <h2>Precio - {{$product->price}}</h2>
                <h2>Existencia - {{$product->existance}}</h2>
                <h2>Descripción - {{$product->description}}</h2>
            </div>
            <br>
            @auth    
            <h2><a href="{{route('product.edit',$product->id)}}" class="btn btn-info" role="button">Editar {{$product->name}} </a></h2>
            @endauth
        </div><!--divMain end-->
    </main>
</x-mi-layout>
<!--</body>
</html>-->