<?php

namespace App\Http\Controllers;
use App\Models\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     * 
     */
    public function index(Request $request)
    {
        //return view('home');
        if($request->user()->hasRole('usuario')){
            $productos=DB::table('productos')->get();
        return view('listap',['productos'=>$productos],);
            //return view('listap');
        }
        elseif($request->user()->hasRole('admin')){
            return view ('admin');
            
        }
    }
}
