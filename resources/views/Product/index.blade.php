<x-mi-layout>
    <main>
            <div class="divMains" id="divMainIndexP">
                
                <!--<div class="divRedirects" id="divRedirectPI">    
                   <h2 class="headerRedirects"><a href="/">Página principal</a> &nbsp;&nbsp; </h2>
                </div>-->  <!--divRedirect end-->
                <div class="divLists" id="divList1">
    
                <h1 class="titleh2">Productos</h1>
                @auth    
                <h2 style="text-align:end"><a href="{{ route('product.create') }}">Crear producto</a></h2>
                @endauth
                <br>
                    @foreach ($products as $product)
                        <div class="divProducts">
                            <h2>Nombre del producto: {{$product->name}}<a href="{{ route('product.show',$product->id) }}"> <br><br>Ver detalles</a><!--<br> <a href="{{ route('product.edit',$product->id) }}">Editar</a> | --><h2>
                            <br>
                            @auth    
                            <form action="{{ route('product.destroy',$product) }}" method="POST">
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" >Eliminar</button>
                            </form>
                            @endauth
                            <br>
                            <!--Categoria producto:{{$product->category}}-->
                        </div>  <!--productDiv end-->
                        <br>
                        @endforeach
                </div>  <!--divList end-->
                <br>
            </div>  <!--divMain end-->
        </main>
</x-mi-layout>