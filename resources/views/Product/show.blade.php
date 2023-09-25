<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <title>Document</title>
</head>
<body>
    <header>
        <div class="divHeaders" id="divHeaderShowP">
            <div class="divHeaderTitles" id="divHeaderTitle3">
                <h1 class="headerH1">SHOW PRODUCTO</h1>
            </div><!--divHeaderTitle end-->
        </div>  <!--divHeader end-->
    <br>
    </header>

    <main>
        <div class="divMains" id="divMainIndexP">
            <br>
            <div class="divRedirects" id="divRedirect2">
                <h2 class="headerRedirect"><a href="{{ route('product.index') }}">REGRESAR A INDEX</a></h2>
            </div><!--divRedirects end-->
            <br>
            <div class="divLists">
                <h2>Producto - {{$product->name}}</h2>
                <h2>Categoria - {{$product->category}}</h2>
            </div>
            <br>
        </div><!--divMain end-->
    </main>
</body>
</html>