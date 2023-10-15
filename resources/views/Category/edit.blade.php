<x-mi-layout>
    <main>
        <br>
        <div class="divMains" id="divMainEditP">
            <br>
            <!--Redirección hacia otras páginas-->
            <div class="divRedirects" id="divRedirectPE">
                <h2 class="headerRedirects" style="text-align: end"><a href="{{ route('category.index') }}" class="btn btn-info" role="button">Regresar a categorías</a> &nbsp;|&nbsp; <a href="{{ route('category.show',$category->id) }}" class="btn btn-info" role="button"  >Regresar a {{$category->name}}</a></h2>
                <!--<h2 class="headerRedirects"></h2>-->
             </div>     <!--divRedirect end-->

            <!-- Titulo de la forma o algo así, centrado-->
            <div class="divForms" id="divFormPE">
                <form action="{{ route('category.update',$category) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="divInputs" id="divInputPE1">
                        <label for="name">Nombre:
                        <input type="text" name="name" id="" value="{{$category->name}}">
                        </label>
                    </div>  <!--divInput end-->
                        <br>
                    <div class="divInputs" id="divInputPE2">
                        <label for="category">Descripción:
                        <input type="text" name="category" id="" value="{{$category->description}}">
                        </label>
                    </div>  <!--divInput end-->
                        <br>
                        
                    <div class="divButtons" id="divButtonPE1">
                        <button type="submit" class="btn btn-danger">Enviar</button>
                    </div>  <!--divButton end-->
                </form>
            </div>  <!--divForm end-->

            <br>
        </div>  <!--divMains end-->
    </main>
</x-mi-layout>