<x-mi-layout>
    <main>
            <div class="divMains" id="divMainIndexP">
                <br>
                <div class="divRedirects" id="divRedirectPI">    
                   <h2 class="headerRedirects"><a href="/">Página principal</a> &nbsp;&nbsp; <a href="{{ route('product.create') }}">Crear producto</a></h2>
                   <!--<h2 class="headerRedirects"><a href="/">Página principal</a></h2>-->
                </div>  <!--divRedirect end-->
                <br>
                <div class="divLists" id="divList1">
    
                <h2 class="titleh2">Productos</h2>
                    @foreach ($products as $product)
                        <div class="divProducts">
                            Nombre producto: <a href="{{ route('product.show',$product->id) }}">{{$product->name}} </a> | <a href="{{ route('product.edit',$product->id) }}">Editar</a> | 
                            <br>
                            <form action="{{ route('product.destroy',$product) }}" method="POST">
                                @csrf 
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                            <br>
                            Categoria producto:{{$product->category}}
                            <br><br>
                        </div>  <!--productDiv end-->
                        <br>
                        @endforeach
                </div>  <!--divList end-->
                <br>
            </div>  <!--divMain end-->
        </main>
</x-mi-layout>