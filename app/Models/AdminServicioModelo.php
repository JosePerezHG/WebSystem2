<?php namespace App\Models;
use CodeIgniter\Model;
class AdminServicioModelo extends Model
{

    public function listar(){
    	$db = \Config\Database::connect();
    	$sql = "CALL sp_listar_servicio()";
    	$result=$db->query($sql);
    	$db->close();
    	return $result->getResultArray();
    }

    public function registrar($data){
    	$db = \Config\Database::connect();
    	$sql = "CALL sp_registrar_servicio(?,?,@s)";
    	$db->query($sql,$data);
    	$res =$db->query('select @s as out_param');
    	$db->close();
    	return $res->getRow()->out_param;    
    }

    public function comboestado()
    {
        $db = \Config\Database::connect();
        $sql = "CALL sp_listar_tipo_servicio();";
        $result=$db->query($sql);
        $db->close();
        return $result->getResultArray();
    }
}