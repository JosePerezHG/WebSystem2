<?php namespace App\Models;

use CodeIgniter\Model;

class NotaModelo extends Model
{

     public function registrar($data)
    {
    	$db = \Config\Database::connect();
    	$sql = "CALL sp_(?,@s)";
    	$db->query($sql,$data);
    	$res =$db->query('select @s as out_param');
    	$db->close();
    	return   $res->getRow()->out_param;    
    }
}