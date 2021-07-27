<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\RegistroModelo;
class Registro extends BaseController
{

	public function __construct() {
     	  helper(['form', 'url']);
       	    	            	
    }
	public function index()
	{
		return view('header').view('registro');
	}

	public function doSave()
	{
		$validation =  \Config\Services::validation();
		$respuesta = array();
        

        $input = $this->validate([
            'nombre' => [
            'rules'  => 'required|min_length[5]|max_length[50]',
            'errors' => [
                'required' => 'No debe el Nombre ser vacio',
                'min_length' => 'El Nombre debe ser menor de 5 letras',
                'max_length' => 'El Nombre no debe exceder de 50 caracteres'
              ]
            ],
            
            'apellidos' => 'required|min_length[5]|max_length[90]',
            'fecha' => 'required',
            'correo' => 'required|min_length[5]|max_length[30]|valid_email',
            'clave' => 'required|min_length[6]|max_length[30]',
        ]);

        if (!$input) {
          $respuesta['error'] = $this->validator->listErrors() ;
          echo view('header').view('registro', [
          'validation' => $this->validator
          ]);
            
        } else {
              $request =  \Config\Services::request();
              $nombre= $request->getPostGet('nombre') ;
              $apel= $request->getPostGet('apellidos') ;
              $fec= $request->getPostGet('fecha') ;
              $corr= $request->getPostGet('correo') ;
              $clave= $request->getPostGet('clave') ;
              $data = array($nombre,$apel,$fec,$corr,$clave); 
              $modelo = new RegistroModelo($db);

              if($modelo->registrar($data)){
                $respuesta['error']="";
                $respuesta['ok'] = "Operacion realizada";
              }else{
                $respuesta['error'] = "Problemas al realizar operacion!!";
              }
        }
        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($respuesta));  
    }
}