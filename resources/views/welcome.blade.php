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
        <div class="divHeaders" id="divHeaderW">
            <div class="divHeaderTitles" id="divHeaderTitle1">
                <h1 class="headerH1">Inicio Laravel</h1>
            </div><!--divHeaderTitle end-->
        </div>  <!--divHeader end-->
    </header>

    <br>

    <main>
        <div class="divMains" id="divMainWelcome">
            <br>
            <div class="divRedirects" id="divRedirectW">
                <h2 class="headerRedirects"><a href="{{ route('product.index') }}">Ver lista de productos</a></h2>
                <h2 class="headerRedirects"><a href="{{ route('category.index') }}">Ver lista de categorías</a></h2>
                <!--<h2 class="headerRedirects"><a href="/">Página principal</a></h2>-->
            </div>     <!--divRedirect end-->
            <br>
        </div><!--divMain end-->
</main>
</x-mi-layout>
<!--</body>-->