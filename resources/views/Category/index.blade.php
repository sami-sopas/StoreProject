<x-mi-layout>
    <main>
            <div class="divMains" id="divMainIndexP">
                
                <!--<div class="divRedirects" id="divRedirectPI">    
                   <h2 class="headerRedirects"><a href="/">Página principal</a> &nbsp;&nbsp; </h2>
                </div>-->  <!--divRedirect end-->
                <div class="divLists" id="divList1">
    
                <h1 class="titleh2">Categorías</h1>
                @auth    
                <h2 style="text-align:end"><a href="{{ route('category.create') }}">Crear categoría</a></h2>
                @endauth
                <br>
                    @foreach ($categories as $category)
                        <div class="divCategories">
                            <h2>Nombre de la categoría: {{$category->name}}<a href="{{ route('category.show',$category->id) }}"> <br><br>Ver detalles</a><h2>
                            <br>
                            @auth    
                            <form action="{{ route('category.destroy',$category) }}" method="POST">
                                @csrf 
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                            @endauth
                            <br>
                        </div>  <!--productDiv end-->
                        <br>
                        @endforeach
                </div>  <!--divList end-->
                <br>
            </div>  <!--divMain end-->
        </main>
</x-mi-layout>