<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\AdminServicioModelo;
class AdminServicio extends BaseController
{

	public function __construct(){
    helper(['form', 'url','funciones']);  	            	
  }

	public function index(){
    $data=array();
    $modelo = new AdminServicioModelo($db);     
    $data['comboestado']=generarcombo($modelo->comboestado());
		return view('header_admin').view('adminServicio',$data);
	}

  public function doList(){
    $cadena="";
    $respuesta=array();         
    $modelo = new AdminServicioModelo($db);   
    $lista = $modelo -> listar();

      $cadena.='<table>';
      $cadena.='<tr><th>ID TIPO</th><th>Tipo de servicio</th><th>Servicio</th></tr>';
    foreach ($lista as $row) {
      $cadena.='<tr>';
      $cadena.='<td>'.$row['v2'].'</td>';
      $cadena.='<td>'.$row['v1'].'</td>';
      $cadena.='<td>'.$row['v3'].'</td>';
      $cadena.='</tr>';
    }
      $cadena.='</table>';


     $respuesta['data']=$cadena;
     header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($respuesta));
  }

  public function doSave(){

  		$validation =  \Config\Services::validation();
  		$respuesta = array();
            
      
      $input = $this->validate([
        'id_tipo_servicio' => [
          'rules'  => 'required',
          'errors' => [
              'required' => 'Debe seleccionar un tipo de Servicio',
            ]
          ],

        'nombre' => [
          'rules'  => 'required|min_length[5]|max_length[50]',
          'errors' => [
              'required' => 'Debe ingresar un nombre de servicio',
              'min_length' => 'El Nombre debe ser mayor de 5 caracteres',
              'max_length' => 'El Nombre no debe exceder las 50 caracteres'
            ]
          ],
      ]);

    if (!$input) {
     	$respuesta['error'] = $this->validator->listErrors();
    }else{
      $request =  \Config\Services::request();

      $idtps= $request->getPostGet('id_tipo_servicio');
      $nombre= $request->getPostGet('nombre');

      $data = array($idtps,$nombre); 
      $modelo = new AdminServicioModelo($db);

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
