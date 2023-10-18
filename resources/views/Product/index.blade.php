<x-mi-layout>
    <main>
            <div class="divMains" id="divMainIndexP">
                
                <!--<div class="divRedirects" id="divRedirectPI">    
                   <h2 class="headerRedirects"><a href="/">Página principal</a> &nbsp;&nbsp; </h2>
                </div>-->  <!--divRedirect end-->
                <div class="divLists" id="divList1">
    
                <h1 class="titleh2">Productos</h1>

                <x-alerta>
                    HOLA INDEX PRODUCTOS
                </x-alerta>
                <br>
                @auth    
                <h2><a href="{{ route('product.create') }}" class="btn btn-primary" role="button">Crear producto</a></h2>
                @endauth
                <br>
                    @foreach ($products as $product)
                        <div class="divProducts">
                            <h2>Nombre del producto: {{$product->name}} <h2>
                                 <h2>Usuario: {{$product->user->name}} <h2>
                                <div style="margin-top:-40px;text-align: right;">
                                <a href="{{ route('product.show',$product->id) }}" class="btn btn-info" role="button">Ver detalles</a>
                                
                            @auth    
                            <form action="{{ route('product.destroy',$product) }}" method="POST">
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