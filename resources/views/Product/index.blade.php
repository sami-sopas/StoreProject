<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="divHeaders" id="divHeaderIndexP">
            <h1 class="headerH1">INDEX PRODUCTO</h1>
        </div>  <!--divHeader end-->
    </header>

            <br>

    <main>
        <div class="divMains" id="divMainIndexP">

            <div class="divRedirects" id="divRedirect2">    
               <h2 class="headerRedirects"><a href="{{ route('product.create') }}">Crear producto carajo</a></h2>
            </div>  <!--divRedirect end-->

            <h2 class="titleh2">Productos</h2>
            <div class="divLists" id="divList1">
                @foreach ($products as $product)
                    <div class="productDiv">
                        Nombre producto: <a href="{{ route('product.show',$product) }}">{{$product->name}} </a> <br>
                        Categoria producto:{{$product->category}}
                        <br><br>
                    </div>  <!--productDiv end-->
                    @endforeach
            </div>  <!--divList end-->
        </div>  <!--divMain end-->
    </main>
</body>
</html>