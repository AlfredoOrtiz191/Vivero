<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function login(){
        return view('login');
    }
        public function show($repeticiones){
            return 'En dicho aparato'.$repeticiones.'series';
        }
        public function listaCategorias(){
            $categorias=["Plantas de sombra" => '1.jpg',
            "Plantas de sol" => '2.jpg',
            "Plantas de resolana" => '3.jpg',
            "Macetas de barro" => '4.jpg',
            "Piedra decorativa" => '5.jpg', 
            "Diversos tipos de tierra" => '6.jpg'];
            $cadena="Contamos con diversas categorias de plantas";
            return view('categorias',compact('categorias','cadena'));
        }
        /*public function listaCategorias(){
            $categorias=array(
                '1' => array(
                    'numero'=>"1",
                    'nombre'=>"Plantas de sombra",
                    'descripcion'=>"###",
                    'precio'=>"47773456712",
                    'stock'=>"@gamil.com"),
                    $imagen=>"1.jpg",
                              '2' => array(
                                'numero'=>"2",
                                'nombre'=>"Plantas de sombra",
                                
                                'descripcion'=>"###",
                                'precio'=>"47773456712",
                                'stock'=>"@gamil.com"),
                                $imagen=>"2.jpg",
                      '3' => array(
                        'numero'=>"3",
                        'nombre'=>"Plantas de sombra",
                        'foto'=>'1.jpg',
                        'descripcion'=>"###",
                        'precio'=>"47773456712",
                        'stock'=>"@gamil.com"),
                        $imagen=>"3.jpg",
                );
                $i=1;

            $categorias=["Plantas de sombra" => '1.jpg',
            "Plantas de sol" => '2.jpg',
            "Plantas de resolana" => '3.jpg',
            "Macetas de barro" => '4.jpg',
            "Piedra decorativa" => '5.jpg', 
            "Diversos tipos de tierra" => '6.jpg'];
            $cadena="Contamos con diversas categorias de plantas";
            return view('categorias', compact ('categorias', 'cadena','i','imagen'));
        }*/
        public function index(){
            return view('principal');
        }
      //Funciones clientes
      public function generalC(){
        return view('clientes.general');
    }
      public function listaC(){
          $clientes=array(
              '1' => array(
                  'numero'=>"1",
                  'nombre'=>"Luis",
                  'apellido'=>"Ortiz",
                  'direccion'=>"###",
                  'telefono'=>"47773456712",
                  'correo'=>"@gamil.com"),
                            '2' => array(
                            'numero'=>"2",
                            'nombre'=>"Juan",
                            'apellido'=>"Feliciano",
                            'direccion'=>"1",
                            'telefono'=>"4773654822",
                            'correo'=>"@gamil.com"),
                    '3' => array(
                        'numero'=>"3",
                        'nombre'=>"Maria",
                        'apellido'=>"Lopez",
                        'direccion'=>"1",
                        'telefono'=>"4772095847",
                        'correo'=>"@gamil.com"),
              );
              $i=1;
              $cadena="lista de Clientes";
              return view('clientes.lista', compact ('clientes', 'cadena','i'));

      }
      public function crearC(){
          return view('clientes.crear');
      }

//Funciones provedores
        
      public function generalP(){
        return view('provedores.general');
    }
      public function listaP(){
          $provedores=array(
              '1' => array(
                  'numero'=>"1",
                  'compania'=>"Vivero Magda",
                  'telefono'=>"47773456712",
                  'correo'=>"@gamil.com"),
                            '2' => array(
                            'numero'=>"2",
                            'compania'=>"Vivero Magda",
                            'telefono'=>"4773654822",
                            'correo'=>"@gamil.com"),
                    '3' => array(
                        'numero'=>"3",
                        'compania'=>"Vivero Magda",
                        'telefono'=>"4772095847",
                        'correo'=>"@gamil.com"),
              );
              $i=1;
              $cadena="lista de provedores";
              return view('provedores.lista', compact ('provedores', 'cadena','i'));

      }
      public function crearP(){
          return view('provedores.crear');
      }
 

      //Funciones usuarios
        
      public function generalU(){
        return view('usuarios.general');
    }
      public function listaU(){
          $usuarios=array(
              '1' => array(
                  'numero'=>"1",
                  'nombre'=>"Yulian",
                  'correo'=>"@gamil.com",
                  'contraseña'=>"####",
                  'rfc'=>"rf45rt56",
                  'perfil'=>"Vendedor"),
                            '2' => array(
                                'numero'=>"2",
                                'nombre'=>"Tifany",
                                'correo'=>"@gamil.com",
                                'contraseña'=>"####",
                                'rfc'=>"rf45rt56",
                                'perfil'=>"Vendedor"),
                    '3' => array(
                        'numero'=>"3",
                  'nombre'=>"Bryan",
                  'correo'=>"@gamil.com",
                  'contraseña'=>"####",
                  'rfc'=>"rf45rt56",
                  'perfil'=>"Vendedor"),
              );
              $i=1;
              $cadena="lista de usuarios";
              return view('usuarios.lista', compact ('usuarios', 'cadena','i'));

      }
      public function crearU(){
          return view('usuarios.crear');
      }
      public function guardarU(){
          return 'Guardado';
      }

      public function canasta(){
        return view('productosAcomprar');
    }

    //Funciones productos
        
    public function generalPr(){
        return view('productos.general');
    }
      public function listaPr(){
          $productos=array(
              '1' => array(
                'numero'=>"1",
                  'categoria'=>"Arbol",
                  'nombre'=>"Magnolia",
                  'descripcion'=>"Arbol de sol, crece alto",
                  'precio'=>" $500",
                  'stock'=>"21",
                  'status'=>"Disponible"),
                            '2' => array(
                                'numero'=>"2",
                                'categoria'=>"PlantaCH",
                                'nombre'=>"Tulipan",
                                'descripcion'=>"Planta de temporada, colorida",
                                'precio'=>"$85",
                                'stock'=>"128",
                                'status'=>"Disponible"),
                    '3' => array(
                                    'numero'=>"3",
                                    'categoria'=>"PlantaCH",
                                    'nombre'=>"Violeta",
                                    'descripcion'=>"Planta de resolana",
                                    'precio'=>"$75",
                                    'stock'=>"0",
                                    'status'=>"No disponible"),
              );
              $i=1;
              $cadena="lista de productos";
              return view('productos.lista', compact ('productos', 'cadena','i'));

      }
      public function crearPr(){
          return view('productos.crear');
      }
 
}
    