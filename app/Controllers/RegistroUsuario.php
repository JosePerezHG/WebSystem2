<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\RegistroUsuarioModelo;
class RegistroUsuario extends BaseController
{

	public function __construct(){
    helper(['form', 'url']);  	            	
  }

	public function index(){
		return view('header').view('registroUsuario');
	}

  public function doSave(){

		$validation =  \Config\Services::validation();
		$respuesta = array();
          
    $input = $this->validate([
      'nombre' => [
        'rules'  => 'required|min_length[5]|max_length[50]',
        'errors' => [
            'required' => 'No debe el Nombre ser vacio',
            'min_length' => 'El Nombre debe ser mayor de 5 letras',
            'max_length' => 'El Nombre no debe exceder de 50 caracteres'
          ]
      ],
      'correo' => 'required|min_length[5]|max_length[30]|valid_email',
      'clave' => 'required|min_length[6]|max_length[30]',
    ]);

    if (!$input) {
     	$respuesta['error'] = $this->validator->listErrors();
      
    }else{
      $request =  \Config\Services::request();

      $nombre= $request->getPostGet('nombre') ;
      $corr= $request->getPostGet('correo') ;
      $clave= $request->getPostGet('clave') ;

      $data = array($corr,$clave,$nombre); 
      $modelo = new RegistroUsuarioModelo($db);

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
	//--------------------------------------------------------------------
}
