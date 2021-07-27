<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UsuariosModelo;
class Usuarios extends BaseController
{

	public function __construct() {
     	  helper(['form', 'url']);
       	    	            	
    }
	public function index_usuarios()
	{
		return view('header').view('usuarios');
	}

	public function doSave()
	{
		$validation =  \Config\Services::validation();
		$respuesta = array();
        

        $input = $this->validate([
            'nombre' => [
            'rules'  => 'required|min_length[5]|max_length[100]',
            'errors' => [
                'required' => 'No debe el Nombre ser vacio',
                'min_length' => 'El Nombre debe ser mayor de 5 caracteres',
                'max_length' => 'El Nombre no debe exceder de 100 caracteres'
              ]
            ],
                              
            'correo' => 'required|min_length[20]|max_length[100]|valid_email',
            'usuario' => 'required|min_length[5]|max_length[100]',
            'password' => 'required|min_length[6]|max_length[30]',
        ]);

        if (!$input) {
          $respuesta['error'] = $this->validator->listErrors() ;
          echo view('header_login').view('usuarios', [
          'validation' => $this->validator
          ]);
            
        } else {
              $request =  \Config\Services::request();
              $nombre= $request->getPostGet('nombre') ;
              $corr= $request->getPostGet('correo') ;
               $user= $request->getPostGet('usuario') ;
              $clave= $request->getPostGet('password') ;
              $data = array($nombre,$corr,$user,$clave); 
              $modelo = new UsuariosModelo($db);

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