<?php

namespace App\Http\Controllers;
use App\Models\producto;
use Illuminate\Http\Request;

class carritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart');
    }
    public function addToCart($id)
    {
        $producto = producto::find($id);
        $cart=session()->get('cart');

        if(!$cart){
            $cart=[
                    $id=>[
                        "name"=>$producto->name,
                        "quantity"=>1,
                        "precio"=>$producto->precio,
                        "foto"=>$producto->foto,
                        "descripcion"=>$producto->descripcion

                    ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success','Producto agregado a carrito exitosamente');
        }

        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success','Producto agregado a carrito exitosamente');
        }
        $cart[$id] = [
                        "name"=>$producto->name,
                        "quantity"=>1,
                        "precio"=>$producto->precio,
                        "foto"=>$producto->foto,
                        "descripcion"=>$producto->descripcion
        ];
        session()->put('cart', $cart);
            return redirect()->back()->with('success','Producto agregado a carrito exitosamente');
    }
    public function reduce($id){
        $producto = producto::find($id);
        $cart=session()->get('cart');

        if(isset($cart[$id])){
            $cart[$id]['quantity']--;
            session()->put('cart', $cart);
            return redirect()->back()->with('success','Producto agregado a carrito exitosamente');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
