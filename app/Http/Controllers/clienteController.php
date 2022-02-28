<?php

namespace App\Http\Controllers;
use App\Models\cliente;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes=DB::table('clientes')->get();
        return view('clientes.lista',['clientes'=>$clientes],);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('clientes.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente =cliente::create($request->all());
        $cadena="Cliente registrado con exito con el id " .$cliente->id;
        $clientes=DB::table('clientes')->get();
        return view('clientes.lista',['clientes'=>$clientes], compact('cadena'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente=DB::table('clientes')->where('id',$id)->first();
        return view ('clientes.detalle',compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente=cliente::findOrfail($id);
        return view('clientes.editar', compact('cliente'));
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
        $cliente=cliente::findOrfail($id);
        $cliente->name=$request->name;
        $cliente->apellido=$request->apellido;
        $cliente->direccion=$request->direccion;
        $cliente->telefono=$request->telefono;
        $cliente->email=$request->email;
        $cliente->password=$request->password;
        $cliente->foto=$request->foto;
        $cliente->save();
        $cadena="Cliente actualizado con exito con el id".$cliente->id;
        $clientes=DB::table('clientes')->get();
        return view('clientes.lista',['clientes'=>$clientes],compact('cadena'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('clientes')->where('id',$id)->delete();
        $cadena="Cliente borrado con exito";
        $clientes=DB::table('clientes')->get();
        return view('clientes.lista',['clientes'=>$clientes],compact('cadena'));
    }
}
