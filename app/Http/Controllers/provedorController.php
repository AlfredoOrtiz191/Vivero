<?php

namespace App\Http\Controllers;
use App\Models\provedor;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class provedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provedores=DB::table('provedores')->get();
        return view('provedores.lista',['provedores'=>$provedores],);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('provedores.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $provedor =provedor::create($request->all());
        $cadena="Provedor registrado con exito con el id " .$provedor->id;
        $provedores=DB::table('provedores')->get();
        return view('provedores.lista',['provedores'=>$provedores], compact('cadena'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $provedor=DB::table('provedores')->where('id',$id)->first();
        return view ('provedores.detalle',compact('provedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provedor=provedor::findOrfail($id);
        return view('provedores.editar', compact('provedor'));
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
        $provedor=provedor::findOrfail($id);
        $provedor->name=$request->name;
        $provedor->telefono=$request->telefono;
        $provedor->email=$request->email;
        $provedor->foto=$request->foto;
        $provedor->save();
        $cadena="Provedor actualizado con exito con el id".$provedor->id;
        $provedores=DB::table('provedores')->get();
        return view('provedores.lista',['provedores'=>$provedores],compact('cadena'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('provedores')->where('id',$id)->delete();
        $cadena="Producto borrado con exito";
        $provedores=DB::table('provedores')->get();
        return view('provedores.lista',['provedores'=>$provedores],compact('cadena'));
    }
}
