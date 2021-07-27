<?php namespace App\Models;
use CodeIgniter\Model;
class AdminArticuloModelo extends Model
{

    public function registrar($data)
    {
        $db = \Config\Database::connect();
        $sql = "CALL sp_registrar_articulo(?,?,?,@s)";
        $db->query($sql,$data);
        $res =$db->query('select @s as out_param');
        $db->close();
        return   $res->getRow()->out_param;    
    }

    public function comboestado()
    {
        $db = \Config\Database::connect();
        $sql = "CALL sp_listar_temas_todos();";
        $result=$db->query($sql);
        $db->close();
        return $result->getResultArray();
    }
}