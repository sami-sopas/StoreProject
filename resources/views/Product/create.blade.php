<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <title>Document</title>
</head>
<body>-->
<x-mi-layout>
    <header>
        <div class="divHeaders" id="divHeaderCreateP">
            <div class="divHeaderTitles" id="divHeaderTitle3">
                <h1 class="headerH1">Crear producto</h1>
            </div><!--divHeaderTitle end-->
        </div>  <!--divHeader end-->
    </header>

    <main>
        <br>
        <div class="divMains" id="divMainCreateP">
            <br>
            <!--Redirección hacia otras páginas-->
            <div class="divRedirects" id="divRedirectPC">
                <h2 class="headerRedirects"><a href="/">Página principal</a>    &nbsp;|&nbsp;   <a href="{{ route('product.index') }}">Ver lista de Productos</a></h2>
                <!--<h2 class="headerRedirects"><a href="/">Página principal</a></h2>-->
            </div>     <!--divRedirect end-->

            
            @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li> <br>
                    @endforeach
                </ul>
            </div>
        @endif

            <!-- Titulo de la forma o algo así, centrado-->
            <div class="divForms" id="divFormP">
                <form action="{{ route('product.store') }}" method="POST">
                    @csrf
                    <div class="divInputs" id="divInputP1">
                        <label for="name">Nombre
                        <input type="text" name="name" id="" value="{{ old('name') }}">
                        </label>
                    </div>  <!--divInput end-->
                        <br>
                    <div class="divInputs" id="divInputP2">
                        
                        <label for="category">Categoria
                            <select name="category_id" id="">
                                <option value="" selected disabled> Seleccione categoría </option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>  <!--divInput end-->
                        <br>
                        <div class="divInputs" id="divInputP2">
                            <label for="price">Precio
                            <input type="text" name="price" id="" value="{{ old('price') }}">
                            </label>
                        </div>  <!--divInput end-->
                            <br>
                            <div class="divInputs" id="divInputP2">
                                <label for="existance">Existencia
                                <input type="text" name="existance" id="" value="{{ old('existance') }}">
                                </label>
                            </div>  <!--divInput end-->
                                <br>
                        <div class="divInputs" id="divInputP2">
                            <label for="description">Descripción
                            <input type="text" name="description" id="" value="{{ old('description') }}">
                            </label>
                        </div>  <!--divInput end-->
                        <br>

                    <div class="divButtons" id="divButtonP1">
                        <button type="submit">Enviar</button>
                    </div>  <!--divButton end-->
                </form>
            </div>  <!--divForm end-->

            <br>
        </div>  <!--divMains end-->
    </main>
</x-mi-layout>
<!--</body>
</html>-->