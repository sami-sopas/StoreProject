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
        <div class="divHeaders" id="divHeaderEditP">
            <div class="divHeaderTitles" id="divHeaderTitle5">
                <h1 class="headerH1">EDITAR PRODUCTO</h1>
            </div><!--divHeaderTitle end-->
        </div>  <!--divHeader end-->
    </header>

    <main>
        <br>
        <div class="divMains" id="divMainEditP">
            <br>
            <!--Redirección hacia otras páginas-->
            <div class="divRedirects" id="divRedirectPE">
                <h2 class="headerRedirects"><a href="/">Página principal</a>   &nbsp;&nbsp;    <a href="{{ route('product.index') }}">Ver lista de Productos</a></h2>
                <!--<h2 class="headerRedirects"></h2>-->
             </div>     <!--divRedirect end-->

            <!-- Titulo de la forma o algo así, centrado-->
            <div class="divForms" id="divFormPE">
                <form action="{{ route('product.store') }}" method="POST">
                    @csrf
                    <div class="divInputs" id="divInputPE1">
                        <label for="name">Nombre
                        <input type="text" name="name" id="" value="{{$product->name}}">
                        </label>
                    </div>  <!--divInput end-->
                        <br>
                    <div class="divInputs" id="divInputPE2">
                        <label for="category">Categoria
                        <input type="text" name="category" id="" value="{{$product->category}}">
                        </label>
                    </div>  <!--divInput end-->
                        <br>
                    <div class="divButtons" id="divButtonPE1">
                        <button type="submit">Enviar</button>
                    </div>  <!--divButton end-->
                </form>
            </div>  <!--divForm end-->

            <br>
        </div>  <!--divMains end-->
    </main>
</body>
</html>

<!--<!DOCTYPE html>
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