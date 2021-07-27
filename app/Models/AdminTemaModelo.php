<?php namespace App\Models;
use CodeIgniter\Model;
class AdminTemaModelo extends Model
{

    public function listar()
    {
        $db = \Config\Database::connect();
        $sql = "CALL sp_listar_temas()";
        $result=$db->query($sql);
        $db->close();
        return $result->getResultArray();   
    }
    
    public function listar_z()
    {
        $db = \Config\Database::connect();
        $sql = "CALL sp_listar_temas_z()";
        $result=$db->query($sql);
        $db->close();
        return $result->getResultArray();   
    }

    public function listar_g()
    {
        $db = \Config\Database::connect();
        $sql = "CALL sp_listar_temas_g()";
        $result=$db->query($sql);
        $db->close();
        return $result->getResultArray();   
    }

    public function listar_b()
    {
        $db = \Config\Database::connect();
        $sql = "CALL sp_listar_temas_b()";
        $result=$db->query($sql);
        $db->close();
        return $result->getResultArray();   
    }

    public function listar_recientes()
    {
        $db = \Config\Database::connect();
        $sql = "CALL sp_listar_temas_recientes()";
        $result=$db->query($sql);
        $db->close();
        return $result->getResultArray();
    }

    public function registrar($data)
    {
        $db = \Config\Database::connect();
        $sql = "CALL sp_registrar_tema(?,?,?,@s)";
        $db->query($sql,$data);
        $res =$db->query('select @s as out_param');
        $db->close();
        return   $res->getRow()->out_param;    
    }

    public function comboestado()
    {
        $db = \Config\Database::connect();
        $sql = "CALL sp_listar_servicios();";
        $result=$db->query($sql);
        $db->close();
        return $result->getResultArray();   


    }
}