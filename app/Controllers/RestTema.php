<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;

class RestTema extends ResourceController
{
    protected $modelName = 'App\Models\AdminTemaModelo';
    protected $format    = 'json';
  
   public function index()
    {
       // return $this->respond($this->model->listar());
      return $this->genericResponse($this->model->listar(),"listado",200);
    }

public function create()
    {
      $validation =  \Config\Services::validation();       
       if (!$this->validate('datatema')) {
         
  return $this->genericResponse(null,$validation->getErrors() ,500);
        } else {
                $request =  \Config\Services::request();
                $id_s = $request->getPostGet('id_servicio');
              $descr = $request->getPostGet('descripcion');
              $img = $this->request->getFile('foto');
              $nombrefile = $img->getRandomName();
              $img->move(ROOTPATH.'resources/temas', $nombrefile);
              $data = array($id_s,$descr,$nombrefile);  
                           
               if($this->model->registrar($data)){
                return $this->genericResponse(null,"Operacion realizada",200);                 
              }else{
                  return $this->genericResponse(null,"Problemas al realizar operacion!!",500);                  
              }
                 
             } 


        
    }
    public function genericResponse($data,$mensaje,$code)
    {
          if($code==200){
            return  $this->respond(array(
              'data' => $data, 'msg' => $mensaje, 'code' => $code
       ));
          }
          else{
              return  $this->respond(array(
        'msg' => $mensaje,  'code' => $code
       ));
          }
    }
    
    // ...
}