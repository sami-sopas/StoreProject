<x-mi-layout>
    <header>
        <div class="divHeaders" id="divHeaderCreateP">
            <div class="divHeaderTitles" id="divHeaderTitle3">
                <h1 class="headerH1">Crear categoría</h1>
            </div><!--divHeaderTitle end-->
        </div>  <!--divHeader end-->
    </header>

    <main>
        <br>
        <div class="divMains" id="divMainCreateP">
            <br>
            <!--Redirección hacia otras páginas-->
            <div class="divRedirects" id="divRedirectPC">
                <h2 class="headerRedirects"><a href="/" class="btn btn-info" role="button">Página principal</a>    &nbsp;|&nbsp;   <a href="{{ route('category.index') }}" class="btn btn-info" role="button"   >Ver lista de categorías</a></h2>
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
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <div class="divInputs" id="divInputP1">
                        <label for="name">Nombre
                        <input type="text" name="name" id="" value="{{ old('name') }}">
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
                        <button type="submit" class="btn btn-danger">Enviar</button>
                    </div>  <!--divButton end-->
                </form>
            </div>  <!--divForm end-->

            <br>
        </div>  <!--divMains end-->
    </main>
</x-mi-layout>