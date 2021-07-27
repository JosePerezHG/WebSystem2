<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\AdminArticuloModelo;
class AdminArticulo2 extends BaseController
{

  public function __construct() {
        helper(['form', 'url','funciones']);                    
    }
  //poner nueva funnción en el helper

  public function index()
  {
    $data=array();
    $modelo = new AdminArticuloModelo($db);     
    $data['comboestado']=generarcombotemas($modelo->comboestado());
    return view('header_admin').view('adminArticulo2',$data);
  }
  
public function doSave()
  {
    $validation =  \Config\Services::validation();
    $respuesta = array();
          
    
      $input = $this->validate([
            'id_tema' => 'required',

            'titulo' => [
              'rules'  => 'required|min_length[10]|max_length[300]',
              'errors' => [
                  'required' => 'Se debe ingresar un titulo',
                  'min_length' => 'Debe ser mayor de 10 caracteres',
                  'max_length' => 'No debe exceder de 300 caracteres'
              ]
            ],

            'articulo' => [
              'rules'  => 'required',
              'errors' => [
                  'required' => 'No te quivoques porfa'
              ]
            ],
        ]);

       if (!$input) {
         $respuesta['error'] = $this->validator->listErrors() ;
  
        } else {
                $request =  \Config\Services::request();
              $id_t = $request->getPostGet('id_tema');
              $tit = $request->getPostGet('titulo');
              $artc = $request->getPostGet('articulo');

              $data = array($id_t,$tit,$artc); 
              $modelo = new AdminArticuloModelo($db);
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
