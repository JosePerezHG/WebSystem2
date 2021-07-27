<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\RegistroContactanos;
class Contactanos extends BaseController
{

	public function __construct() {
     	  helper(['form', 'url']);
       	    	            	
    }
    
	public function index()
	
  {
    return view('header').view('contactanos', [
      'mensaje' => ''
      ]);
	}

	public function doSave()
	{
		$validation =  \Config\Services::validation();
		$respuesta = array();
        

        $input = $this->validate([
            'nombre' => [
            'rules'  => 'required|min_length[5]|max_length[20]',
            'errors' => [
                'required' => 'No debe el Nombre ser vacio',
                'min_length' => 'El Nombre debe ser mayor de 5 letras',
                'max_length' => 'El Nombre no debe exceder de 20 caracteres'
              ]
            ],
            
            'apellidos' => [
            'rules'  => 'required|min_length[5]|max_length[50]',
            'errors' => [
                'required' => 'No debe el Nombre ser vacio',
                'min_length' => 'El Nombre debe ser mayor de 5 letras',
                'max_length' => 'El Nombre no debe exceder de 50 caracteres'
              ]
            ],

            'dni' => [
            'rules' => 'required|min_length[8]|max_length[8]',
            'errors' => [
                'required' => 'No debe el Nombre ser vacio',
                'min_length' => 'El Nombre debe ser mayor de 8 letras',
                'max_length' => 'El Nombre no debe exceder de 8 caracteres'
              ]
            ],


            'fecha' => [
            'rules' => 'required',
            'errors' => [
            'required' => 'No debe el Nombre ser vacio',
          ] 
        ],

            'consulta' => [
            'rules' => 'required|min_length[50]|max_length[500]',
            'errors' => [
            'required' => 'No debe el Nombre ser vacio',
            'min_length' => 'La consulta debe ser mayor de 50 letras',
            'max_length' => 'La consulta no debe exceder de 500 caracteres'
          ]
        ]
      ]);

        if (!$input) {
          //$respuesta['error'] = $this->validator->listErrors() ;
          echo view('header').view('Contactanos', [
          'validation' => $this->validator, 'mensaje' => ''
          ]);
            
        } else {
              $request =  \Config\Services::request();
              $nombre= $request->getPostGet('nombre') ;
              $apel= $request->getPostGet('apellidos') ;
              $dni= $request->getPostGet('dni') ;
              $fec= $request->getPostGet('fecha') ;
              $consulta= $request->getPostGet('consulta') ;
              $data = array($nombre,$apel,$dni,$fec,$consulta); 
              $modelo = new RegistroContactanos($db);

              if($modelo->registrar($data)){
                echo view('header').view('contactanos', [
                'mensaje' => 'Registro correcto'
                ]);
                //$respuesta['error']="";
                //$respuesta['ok'] = "Operacion realizada";
              }else{
                echo view('header').view('contactanos', [
                'mensaje' => 'Registro incorrecto'
                ]);
                //$respuesta['error'] = "Problemas al realizar operacion!!";
              } 
        }
        //header('Content-Type: application/x-json; charset=utf-8');
        //echo(json_encode($respuesta));  
    }
}