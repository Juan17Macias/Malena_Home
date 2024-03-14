<h1>Mostrando todos los registros de la Base de Datos </h1>

<a href="{{url('crud_tienda/productos/create')}}"> Crear nuevo producto</a>
<br>
<div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Imagen</th>
                <th scope="col">Editar | Borrar</th>
            </tr>
        </thead>

        <tbody>
            <!-- productos que viene de  $datos['productos'] -->
            @foreach ($productos as $producto)
            <tr class="">
                <td>{{$producto->id}}</td>
                <td>{{$producto->pr_nombre}}</td>
                <td>{{$producto->pr_descripcion}}</td>
                <td>{{$producto->pr_cantidad}}</td>
                <td>{{$producto->pr_precio}}</td>

                <td>
                    <img src="{{asset('storage').'/'.$producto->pr_imagen}}" width="100px" alt="Poducto">
                
                </td>


                <td>
                <a href="{{ url('/crud_tienda/productos/'.$producto->id .'/edit') }}">Editar</a> |
                <form action="{{ url('/crud_tienda/productos/'.$producto->id ) }}" method="post">
                @csrf
               {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('¿Confirmar borrar el producto?')" value="Borrar">
                </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>

    
</div>
