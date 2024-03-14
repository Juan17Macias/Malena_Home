<label for="Nombre">Nombre</label>
<input type="text" name="pr_nombre" id="nombre" value="{{ isset($producto->pr_nombre)?$producto->pr_nombre:'' }}"  placeholder="Nombre Producto">
<br>

<label for="Descripcion">Descripcion</label>
<input type="text" name="pr_descripcion" id="descripcion" value="{{ isset($producto->pr_descripcion)?$producto->pr_descripcion:'' }}" placeholder="Descripcion Producto">
<br>

<label for="Cantidad">Cantidad</label>
<input type="number" name="pr_cantidad" id="catidad" value="{{ isset($producto->pr_cantidad)?$producto->pr_cantidad:'' }}" placeholder="Ingrese cantidad">
<br>

<label for="Precio">Precio Producto</label>
<input type="number" name="pr_precio" id="precio" value="{{ isset($producto->pr_precio)?$producto->pr_precio:'' }}" placeholder="Ingrese Precio">
<br>
@if (isset($producto->pr_imagen))
<img src="{{asset('storage').'/'.$producto->pr_imagen}}" width="100px" alt="Poducto">
@endif
<label for="Imagen">Imagen</label>
<input type="file" name="pr_imagen" id="imagen" value="">
<br>

{{-- El $modo es la forma de cambiar los datos dinamicamente --}}
<input type="submit" Value="{{ $modo }} Datos" >

<br>

<a href="{{url('crud_tienda/productos')}}"> Regresar</a>
