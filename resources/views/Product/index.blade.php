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
        <div class="divHeaders" id="divHeaderIndexP">
            <div class="divHeaderTitles" id="divHeaderTitle1">
                <h1 class="headerH1">INDEX PRODUCTO</h1>
            </div><!--divHeaderTitle end-->
        </div>  <!--divHeader end-->
    </header>

            <br>
    <main>
        <main>
            <div class="divMains" id="divMainIndexP">
                <br>
                <div class="divRedirects" id="divRedirect2">    
                   <h2 class="headerRedirects"><a href="{{ route('product.create') }}">Crear producto carajo</a></h2>
                </div>  <!--divRedirect end-->
                <br>
                <div class="divLists" id="divList1">
    
                <h2 class="titleh2">Productos</h2>
                    @foreach ($products as $product)
                        <div class="divProducts">
                            Nombre producto: <a href="{{ route('product.show',$product->id) }}">{{$product->name}} </a> <br>
                            Categoria producto:{{$product->category}}
                            <br><br>
                        </div>  <!--productDiv end-->
                        <br>
                        @endforeach
                </div>  <!--divList end-->
                <br>
            </div>  <!--divMain end-->
        </main>
</body>
</html>