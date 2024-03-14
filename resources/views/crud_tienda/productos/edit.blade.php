

<form action="{{ url('/crud_tienda/productos/'.$producto->id ) }}" method="post" enctype="multipart/form-data">
@csrf 
{{method_field ('PATCH') }}

@include('crud_tienda/productos.form_plantilla',['modo'=>'Editar'])
</form>

