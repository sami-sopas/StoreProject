<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <div class="divHeaders" id="divHeaderCreateP">
        <h1 class="headerH1">CREANDO PRODUCTO CARAJO</h1>
    </div>

    <main>
        <div class="divMains" id="divMainCreateP">
            <!--Redirección hacia otras páginas-->
            <div class="divRedirects" id="divRedirectP">
                <h2 class="headerRedirects"><a href="{{ route('product.index') }}">Ver lista de Productos</a></h2>
             </div>     <!--divRedirect end-->

            <!-- Titulo de la forma o algo así, centrado-->
            <div class="divForms" id="divFormP">
                <form action="{{ route('product.store') }}" method="POST">
                    @csrf
                    <div class="divInputs" id="divInputP1">
                        <label for="name">Nombre
                        <input type="text" name="name" id="">
                        </label>
                    </div>  <!--divInput end-->
                        <br><br>
                    <div class="divInputs" id="divInputP2">
                        <label for="category">Categoria
                        <input type="text" name="category" id="">
                        </label>
                    </div>  <!--divInput end-->
                        <br><br>
                    <div class="divButtons" id="divButtonP3">
                        <button type="submit">Enviar</button>
                    </div>  <!--divButton end-->
                </form>
            </div>  <!--divForm end-->


        </div>  <!--divMains end-->
    </main>
</body>
</html>