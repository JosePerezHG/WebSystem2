<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\AdminTemaModelo;
class AdminArticulo extends BaseController
{

  public function __construct() {
        helper(['form', 'url','funciones']);
                            
    }

  public function index2()
  {
    return view('header_admin').view('adminArticulo');
  }

    public function index3()
  {
    return view('header_admin').view('prueba');
  }


  public function index()
  {
    $data=array();
    $modelo = new AdminTemaModelo($db);     
    $data['comboestado']=generarcombo($modelo->comboestado());
    return view('header_admin').view('adminTema2',$data);
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


     $respuesta['data']=$cadena;
     header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($respuesta));
}

public function doSave()
  {
    $validation =  \Config\Services::validation();
    $respuesta = array();
          
    
      $input = $this->validate([
            'id_servicio' => 'required|numeric',
            'descripcion' => [
            'rules'  => 'required|max_length[300]',
            'errors' => [
                'required' => 'No debe ser vacio',
                'max_length' => 'No debe exceder de 300 caracteres'
              ]
            ],
            'foto' => [
              'uploaded[foto]',
              'mime_in[foto,image/jpg,image/jpeg,image/png]',
              'max_size[foto,1024]',
              'errors' => [
                'uploaded' => 'Debes Ingresar una Imagen',
                'mime_in' => 'Debes Ingresar una Imagen con extension Valida(jpg,jpeg,png)',
                'max_size' => 'Solo debes subir imagenes hasta 1Mb'
              ]
            ]  

        ]);

       if (!$input) {
         $respuesta['error'] = $this->validator->listErrors() ;
  
        } else {
                $request =  \Config\Services::request();
              $id_s = $request->getPostGet('id_servicio');
              $descr = $request->getPostGet('descripcion');
              
              $img = $this->request->getFile('foto');
              $nombrefile = $img->getRandomName();
              $img->move(ROOTPATH.'resources/temas', $nombrefile);

              $data = array($id_s,$descr,$nombrefile); 
              $modelo = new AdminTemaModelo($db); 
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
