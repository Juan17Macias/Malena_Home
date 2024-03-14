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
        //
        // $datosProductos = request()->all();
        $datosProductos = request()->except('_token');
       
        //Cargar y adjuntar la fotografia del product 
        if($request->hasFile('pr_imagen')){
            $datosProductos['pr_imagen']= $request->file('pr_imagen')->store('uploads','public');
        } 
        
        Productos::Insert($datosProductos);
        return response()->json($datosProductos); 
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
        $datosProductos = request()->except(['_token','_method']);

        if($request->hasFile('pr_imagen')){
            $producto=Productos::FindOrFail($id);
            Storage::delete('public/'.$producto->pr_imagen);            
            $datosProductos['pr_imagen']= $request->file('pr_imagen')->store('uploads','public');
        }
         
       Productos::where('id', '=' ,$id)->update($datosProductos);
        // Devolverme al formulario despues de actualizar el product
        $producto=Productos::FindOrFail($id);
        return view('crud_tienda/productos.edit', compact('producto'));
        
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
       
        return redirect('crud_tienda/productos');

    }
}
