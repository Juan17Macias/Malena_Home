@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Mostrando todos los registros de la Base de Datos </h1>

    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('mensaje')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    






<a href="{{url('crud_tienda/productos/create')}}" class="btn btn-dark"> Crear nuevo producto</a>
<br>
<br>
<div
<div class="table-responsive">
    <table class="table table-primary">
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
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->pr_nombre}}</td>
                <td>{{$producto->pr_descripcion}}</td>
                <td>{{$producto->pr_cantidad}}</td>
                <td>{{$producto->pr_precio}}</td>
                <td>
                    <img src="{{asset('storage').'/'.$producto->pr_imagen}}" width="100px" alt="Producto">
                </td>
                <td>
                    <a href="{{ url('/crud_tienda/productos/'.$producto->id.'/edit') }}" class="btn btn-primary">Editar</a>
                    <form action="{{ url('/crud_tienda/productos/'.$producto->id) }}" method="post" style="display:inline;">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Confirmar borrar el producto?')">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    // Obtener el elemento del div de alerta
    var alerta = document.getElementById('alerta');

    // Función para ocultar el div después de 10 segundos
    setTimeout(function() {
        alerta.style.display = 'none';
    }, 1000); // 10000 milisegundos = 10 segundos
</script>


@endsection