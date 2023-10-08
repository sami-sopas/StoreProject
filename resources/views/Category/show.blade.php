<x-mi-layout>
    <body>
        <header>
            <div class="divHeaders" id="divHeaderShowP">
                <div class="divHeaderTitles" id="divHeaderTitle4">
                    <h1 class="headerH1">{{$category->name}}</h1>
                </div><!--divHeaderTitle end-->
            </div>  <!--divHeader end-->
        <br>
        </header>
    
        <main>
            <div class="divMains" id="divMainShowP">
                <br>
                <div class="divRedirects" id="divRedirectPS">
                    <h2 class="headerRedirect"><a href="{{ route('category.index') }}">Regresar a categorías</a></h2>
                    <!--<h2 class="headerRedirects"><a href="/">Página principal</a></h2>-->
                </div><!--divRedirects end-->
                <br>
                <div class="divLists">
                    <h2>Nombre de la categoría - {{$category->name}}</h2>
                    <h2>Descripción - {{$category->description}}</h2>
                </div>
                <br>
                <h2><a href="{{route('category.edit',$category->id)}}">Editar {{$category->name}}</a></h2>
            </div><!--divMain end-->
        </main>
    </x-mi-layout>