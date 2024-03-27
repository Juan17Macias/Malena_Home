@if (count($errors) > 0)

        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>  {{$error}} </li>
                @endforeach
            </ul>
        </div>

@endif

<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="pr_nombre" value="{{ isset($producto->pr_nombre) ? $producto->pr_nombre :old('pr_nombre') }}" placeholder="Nombre Producto">
</div>
<div class="mb-3">
    <label for="descripcion" class="form-label">Descripción</label>
    <input type="text" class="form-control" id="descripcion" name="pr_descripcion" value="{{ isset($producto->pr_descripcion) ? $producto->pr_descripcion :old('pr_descripcion') }}" placeholder="Descripción Producto">
</div>
<div class="mb-3">
    <label for="cantidad" class="form-label">Cantidad</label>
    <input type="number" class="form-control" id="cantidad" name="pr_cantidad" value="{{ isset($producto->pr_cantidad) ? $producto->pr_cantidad :old('pr_cantidad') }}" placeholder="Ingrese cantidad">
</div>
<div class="mb-3">
    <label for="precio" class="form-label">Precio Producto COP</label>
    <input type="number" class="form-control" id="precio" name="pr_precio" value="{{ isset($producto->pr_precio) ? $producto->pr_precio :old('pr_precio') }}" placeholder="Ingrese Precio">
</div>
@if (isset($producto->pr_imagen))
<img src="{{asset('storage').'/'.$producto->pr_imagen}}" class="img-fluid mb-3" width="100px" alt="Producto">
@endif
<div class="mb-3">
    <label for="imagen" class="form-label">Imagen</label>
    <input type="file" class="form-control" id="imagen" name="pr_imagen">
</div>



{{-- El $modo es la forma de cambiar los datos dinamicamente --}}
<input type="submit" Value="{{ $modo }} Datos" >

<br>
<br>
<a href="{{url('crud_tienda/productos')}}" class="btn btn-dark"> Listar Productos </a>
