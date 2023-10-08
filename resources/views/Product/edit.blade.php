<!--<!DOCTYPE html>
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
        </div>  <!--divHeader end
    </header>-->
    <x-mi-layout>
    <main>
        <br>
        <div class="divMains" id="divMainEditP">
            <br>
            <!--Redirección hacia otras páginas-->
            <div class="divRedirects" id="divRedirectPE">
                <h2 class="headerRedirects" style="text-align: end"><a href="{{ route('product.index') }}">Regresar a productos</a> &nbsp;|&nbsp; <a href="{{ route('product.show',$product->id) }}">Regresar a {{$product->name}}</a></h2>
                <!--<h2 class="headerRedirects"></h2>-->
             </div>     <!--divRedirect end-->

            <!-- Titulo de la forma o algo así, centrado-->
            <div class="divForms" id="divFormPE">
                <form action="{{ route('product.update',$product) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="divInputs" id="divInputPE1">
                        <label for="name">Nombre:
                        <input type="text" name="name" id="" value="{{$product->name}}">
                        </label>
                    </div>  <!--divInput end-->
                        <br>
                    <div class="divInputs" id="divInputPE2">
                        <label for="category">Categoría:
                        <input type="text" name="category" id="" value="{{$product->category}}">
                        </label>
                    </div>  <!--divInput end-->
                        <br>
                        <div class="divInputs" id="divInputP2">
                            <label for="price">Precio
                            <input type="text" name="price" id="" value="{{$product->price}}">
                            </label>
                        </div>  <!--divInput end-->
                            <br>
                            <div class="divInputs" id="divInputP2">
                                <label for="existance">Existencia
                                <input type="text" name="existance" id="" value="{{$product->existance}}">
                                </label>
                            </div>  <!--divInput end-->
                                <br>
                        <div class="divInputs" id="divInputP2">
                            <label for="description">Descripción
                            <input type="text" name="description" id="" value="{{$product->description}}">
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
</x-mi-layout>
<!--</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
