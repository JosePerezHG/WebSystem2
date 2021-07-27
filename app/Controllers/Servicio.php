<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\AdminTemaModelo;
class Servicio extends BaseController
{

	public function __construct() {
     	  helper(['form', 'url']);
       	    	            	
    }
	public function index_z(){
    $cadena="";
    $respuesta=array();         
    $modelo = new AdminTemaModelo($db);   
    $lista = $modelo -> listar_z();
    foreach ($lista as $row) {
      $cadena.='<div class="col-md-4">';
      $cadena.='<a href="'.base_url().'/Tema/index">';
      $cadena.='<img src="'.base_url().'/resources/temas/'.$row['v4'].'"></a>';
      $cadena.='<p>'.$row['v3'].'</p>';
      $cadena.='</div>';
    }
    return view('header').view('zoom', [
      'datos' => $cadena
      ]);

	return view('header').view('zoom');

	}
	public function index_g(){
    $cadena="";
    $respuesta=array();         
    $modelo = new AdminTemaModelo($db);   
    $lista = $modelo -> listar_g();
    foreach ($lista as $row) {
      $cadena.='<div class="col-md-4">';
      $cadena.='<a href="'.base_url().'/Tema/index">';
      $cadena.='<img src="'.base_url().'/resources/temas/'.$row['v4'].'"></a>';
      $cadena.='<p>'.$row['v3'].'</p>';
      $cadena.='</div>';
    }
    return view('header').view('meet', [
      'datos' => $cadena
      ]);

	return view('header').view('meet');
	}
	public function index_b(){
    $cadena="";
    $respuesta=array();         
    $modelo = new AdminTemaModelo($db);   
    $lista = $modelo -> listar_b();
    foreach ($lista as $row) {
      $cadena.='<div class="col-md-4">';
      $cadena.='<a href="'.base_url().'/Tema/index">';
      $cadena.='<img src="'.base_url().'/resources/temas/'.$row['v4'].'"></a>';
      $cadena.='<p>'.$row['v3'].'</p>';
      $cadena.='</div>';
    }
    return view('header').view('bibblue', [
      'datos' => $cadena
      ]);

	return view('header').view('bibblue');
	}
	public function index_t(){
		return view('header').view('bibblue');
	}
	public function index_a(){
		return view('header').view('bibblue');
	}
	public function index_c(){
		return view('header').view('bibblue');
	}

	public function doList(){
	    $cadena="";
	    $respuesta=array();         
	    $modelo = new AdminTemaModelo($db);   
	    $lista = $modelo -> listar();
	    foreach ($lista as $row) {
	      $cadena.='<div class="col-md-4">';
	      $cadena.='<a href="">';
	      $cadena.='<img src="'.base_url().'/resources/temas/'.$row['v4'].'"></a>';
	      $cadena.='<p>'.$row['v3'].'</p>';
	      $cadena.='</div>';
	    }
    }
}