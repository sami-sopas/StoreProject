<x-mi-layout>
    <main>
            <div class="divMains" id="divMainIndexP">
                <div class="divLists" id="divList1">
    
                <h1 class="titleh2">Categorías</h1>
                <br>
                @auth    
                <h2><a href="{{ route('category.create') }}" class="btn btn-primary" role="button">Crear categoría</a></h2>
                @endauth
                <br>
                    @foreach ($categories as $category)
                        <div class="divCategories">
                            <h2>Nombre de la categoría: {{$category->name}}<h2>
                                <div style="margin-top:-40px;text-align: right;">
                            <a href="{{ route('category.show',$category->id) }}" class="btn btn-info" role="button">Ver detalles</a>
                            @auth    
                            <form action="{{ route('category.destroy',$category) }}" method="POST">
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                            @endauth
                                </div>
                        </div>  <!--productDiv end-->
                        <br>
                        @endforeach
                </div>  <!--divList end-->
                <br>
            </div>  <!--divMain end-->
        </main>
</x-mi-layout>