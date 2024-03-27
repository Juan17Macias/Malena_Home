<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage; // Necesatia para la actuañlizacion de la foto

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['productos'] = Productos::paginate(5);

        return view('crud_tienda/productos.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('crud_tienda/productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validar datos que lleguen de formulario de creacion de productos todos deben esatr llenos y si no mostrar mensaje, pero no borrar los datos que ya se han llenado
        $mensaje = [
            'required' => 'El :attribute es requerido', 
            'pr_nombre.required' => 'El nombre del producto es requerido',
            'pr_descripcion.required' => 'La descripcion del producto es requerida',
            'pr_catidad.required' => 'La catidad del producto es requerida',
            'pr_precio.required' => 'El precio del producto es requerido',
            'pr_imagen.required' => 'La imagen del producto es requerida'
        ];
        $datos = [
            'pr_nombre' => 'required|string|max:100',
            'pr_descripcion' => 'required|string|max:100',
            'pr_cantidad' => 'required|string|max:100',
            'pr_precio' => 'required|string|max:100',
            'pr_imagen' => 'required|max:10000|mimes:jpeg,png,jpg'
        ];
                
            $this->validate($request, $datos, $mensaje);
        // $datosProductos = request()->all();
        $datosProductos = request()->except('_token');
       
        //Cargar y adjuntar la fotografia del product 
        if($request->hasFile('pr_imagen')){
            $datosProductos['pr_imagen']= $request->file('pr_imagen')->store('uploads','public');
        } 
        
        Productos::Insert($datosProductos);
        return redirect('crud_tienda/productos')->with('mensaje', 'Producto Agregado con Exito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $producto=Productos::FindOrFail($id);
        //
        return view('crud_tienda/productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {   

        $mensaje = [
            'required' => 'El :attribute es requerido', 
            'pr_nombre.required' => 'El nombre del producto es requerido',
            'pr_descripcion.required' => 'La descripcion del producto es requerida',
            'pr_catidad.required' => 'La catidad del producto es requerida',
            'pr_precio.required' => 'El precio del producto es requerido',
        ];
        $datos = [
            'pr_nombre' => 'required|string|max:100',
            'pr_descripcion' => 'required|string|max:100',
            'pr_cantidad' => 'required|string|max:100',
            'pr_precio' => 'required|string|max:100',

        ];
               
        if($request->hasFile('pr_imagen')){
            $datos = [

                'pr_imagen' => 'required|max:10000|mimes:jpeg,png,jpg'
            ];
        
            $mensaje = [
                'pr_imagen.required' => 'La imagen del producto es requerida'
            ];
        
        }


            $this->validate($request, $datos, $mensaje);


        
        $datosProductos = request()->except(['_token','_method']);

        if($request->hasFile('pr_imagen')){
            $producto=Productos::FindOrFail($id);
            Storage::delete('public/'.$producto->pr_imagen);            
            $datosProductos['pr_imagen']= $request->file('pr_imagen')->store('uploads','public');
        }
         
       Productos::where('id', '=' ,$id)->update($datosProductos);
        // Devolverme al formulario despues de actualizar el product
        $producto=Productos::FindOrFail($id);
        // return view('crud_tienda/productos.edit', compact('producto')); // Si se requiere dejar en la misma pagina 
        return redirect('crud_tienda/productos')->with('mensaje', 'Producto modificado con Exito!');;
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $producto=Productos::FindOrFail($id);
        if(Storage::delete('public/'.$producto->pr_imagen)){
             Productos::destroy($id);
        }
       
        return redirect('crud_tienda/productos')->with('mensaje', 'Producto eliminado con Exito!');

    }
}
