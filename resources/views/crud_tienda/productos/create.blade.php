
@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{ url('/crud_tienda/productos') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('crud_tienda/productos.form_plantilla',['modo'=>'Crear'])

</form>

</div>

@endsection