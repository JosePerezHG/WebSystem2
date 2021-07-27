<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\AdminTemaModelo;
class PortadaAdmin extends BaseController
{

	public function __construct() {
     	  helper(['form', 'url']);
       	    	            	
    }
	public function index()
	{
    $cadena="";
    $respuesta=array();         
    $modelo = new AdminTemaModelo($db);   
    $lista = $modelo -> listar_recientes();
    foreach ($lista as $row) {
      $cadena.='<div class="col-md-4">';
      $cadena.='<a href="'.base_url().'/Tema/index">';
      $cadena.='<img src="'.base_url().'/resources/temas/'.$row['v4'].'"></a>';
      $cadena.='<p><b>'.$row['v1'].':</b> '.$row['v3'].'</p>';
      $cadena.='</div>';
    }
    return view('header_admin').view('portada3', [
      'datos' => $cadena
      ]);

    return view('header_admin').view('portada3');
	}

	public function index_admin()
	{

    $cadena="";
    $respuesta=array();         
    $modelo = new AdminTemaModelo($db);   
    $lista = $modelo -> listar_recientes();
    foreach ($lista as $row) {
      $cadena.='<div class="col-md-4">';
      $cadena.='<a href="'.base_url().'/Tema/index">';
      $cadena.='<img src="'.base_url().'/resources/temas/'.$row['v4'].'"></a>';
      $cadena.='<p><b>'.$row['v1'].':</b> '.$row['v3'].'</p>';
      $cadena.='</div>';
    }

    return view('header_admin').view('portada3', [
      'datos' => $cadena
      ]);

		return view('header_admin').view('portada3');
	}

  public function index3()
  {
    $cadena="";
    $respuesta=array();         
    $modelo = new AdminTemaModelo($db);   
    $lista = $modelo -> listar_recientes();
    foreach ($lista as $row) {
      $cadena.='<div class="col-md-4">';
      $cadena.='<a href="'.base_url().'/Tema/index">';
      $cadena.='<img src="'.base_url().'/resources/temas/'.$row['v4'].'"></a>';
      $cadena.='<p><b>'.$row['v1'].':</b> '.$row['v3'].'</p>';
      $cadena.='</div>';
    }
    return view('header_admin').view('portada3', [
      'datos' => $cadena
      ]);

    return view('header_admin').view('portada3');
  }

	public function doList(){
    $cadena="";
    $respuesta=array();         
    $modelo = new AdminTemaModelo($db);   
    $lista = $modelo -> listar_recientes();
    foreach ($lista as $row) {
      $cadena.='<div class="col-md-4">';
      $cadena.='<a href="'.base_url().'/Tema/index">';
      $cadena.='<img src="'.base_url().'/resources/temas/'.$row['v4'].'"></a>';
      $cadena.='<p><b>'.$row['v1'].':</b> '.$row['v3'].'</p>';
      $cadena.='</div>';
    }


     $respuesta['data']=$cadena;
     header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($respuesta));
}
}