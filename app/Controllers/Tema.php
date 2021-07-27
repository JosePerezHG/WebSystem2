<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\NotaModelo;
class Tema extends BaseController
{

	public function __construct() {
     	  helper(['form', 'url']);
       	    	            	
    }
	public function index()
	{
		return view('header').view('temazoom1');
	}

	public function doSave()
	{
		$validation =  \Config\Services::validation();
		$respuesta = array();
        

        $input = $this->validate([
            'preg1' => 'required',
            'preg2' => 'required',
            'preg3' => 'required',
            'preg4' => 'required',
            'preg5' => 'required',
        ]);

        if (!$input) {
       //	 $respuesta['error'] = $this->validator->listErrors() ;
       echo view('header').view('temazoom1', [
                'validation' => $this->validator
            ]);
            
        } else {
                $request =  \Config\Services::request();
              $preg1= $request->getPostGet('preg1') ;
              $preg2= $request->getPostGet('preg2') ;
              $preg3= $request->getPostGet('preg3') ;
              $preg4= $request->getPostGet('preg4') ;
              $preg5= $request->getPostGet('preg5') ;
 
              $data = array($preg1,$preg2,$preg3,$preg4,$preg5); 
              $modelo = new NotaModelo($db); 
               if($modelo->registrar($data)){
                  $respuesta['ok'] = "Operacion realizada";
              }else{
                  $respuesta['error'] = "Problemas al realizar operacion!!";
              }
        }   
    }
}