<?php

namespace App\Http\Controllers;
use App\Models\producto;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos=DB::table('productos')->get();
        return view('productos.lista',['productos'=>$productos],);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('productos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto =producto::create($request->all());
        $cadena="Producto registrado con exito con el id " .$producto->id;
        $productos=DB::table('productos')->get();
        return view('productos.lista',['productos'=>$productos], compact('cadena'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto=DB::table('productos')->where('id',$id)->first();
        return view ('productos.detalle',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto=producto::findOrfail($id);
        return view('productos.editar', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto=producto::findOrfail($id);
        $producto->name=$request->name;
        $producto->categoria=$request->categoria;
        $producto->descripcion=$request->descripcion;
        $producto->precio=$request->precio;
        $producto->stock=$request->stock;
        $producto->foto=$request->foto;
        $producto->save();
        $cadena="Producto actualizado con exito con el id".$producto->id;
        $productos=DB::table('productos')->get();
        return view('productos.lista',['productos'=>$productos],compact('cadena'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('productos')->where('id',$id)->delete();
        $cadena="Producto borrado con exito";
        $productos=DB::table('productos')->get();
        return view('productos.lista',['productos'=>$productos],compact('cadena'));
    }
}
